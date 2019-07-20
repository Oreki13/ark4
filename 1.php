<?php
    $siswa = [
        "nama" => "Muhammad Arfandy Surya Nugraha",
        "age" => 18,
        "address" => "Sumatra selatan, Prabumulih",
        "hobbies" => "Membaca buku",
        "is_married" => false,
        "list_school" => [
            "name" => "SMAN 7 Prabumulih",
            "year_in" => "2015",
            "year_out" => "2018",
            "major" => null,
        ],
        "skills" => [
            "skill_name" => "Programing",
            "level" => "beginner",
        ],
        "interest_in_coding" => true,
    ];
    $data = json_encode($siswa);
    echo $data;