<?php 
    class EmployeeModel {
        private $dataemp = [
            [
                "id" => "00123",
                "nama" => "Ilham Nur Hasanudin",
                "email" => "ilhamadzkhan203@gmail.com",
                "jabatan" => "Lead Engineer",
            ],
            [
                "id" => "00321",
                "nama" => "Uzmaki Gibran",
                "email" => "uzmaki.gibran@triple-e.id",
                "jabatan" => "Core Engineer",
            ],
            [
                "id" => "00213",
                "nama" => "Saskehhhh",
                "email" => "saskeh@telkominfra.id",
                "jabatan" => "Support Engineer",
            ],
        ];

        public function getAllEmployee()
        {
            return $this->dataemp;
        }

}
 ?>