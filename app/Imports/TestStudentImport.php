<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;

class TestStudentImport implements ToModel
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // ヘッダー行をpass
        if(strlen($row[0]) !== mb_strlen($row[0],'utf8')) {
            return null;
        }

        

        // 性別
        if($row[3] == "男"){
            $row[3] = 0;
        }else{
            $row[3] = 1;
        }

        if(preg_match('/4..11../',$row[0])){
            $row[5] = 1;
        }elseif (preg_match('/4..21../',$row[0])) {
            $row[5] = 2;
        }elseif (preg_match('/4..31../',$row[0])) {
            $row[5] = 3;
        }elseif (preg_match('/4..41../',$row[0])) {
            $row[5] = 4;
        }else{
            $row[5] = 0;
        }
        dump($row);
    
        return new Student([
            'student_number' => $row[0],
            'student_name' => $row[1],
            'student_ruby' => $row[2],
            'student_gender' => $row[3],
            'department_id' => $row[5],
            'overview' => $row[4],
        ]);
    }
}
