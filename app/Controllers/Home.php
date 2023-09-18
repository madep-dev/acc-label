<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function search()
    {
        return view('home/search');
    }

    public function detail($id)
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('gedung_a');

        $query = $builder->where('id', $id)->get();
        $result = $query->getRow();

        $data =
            [
                'row' => $result
            ];

        return view('home/detail', $data);
    }

    public function search_label()
    {
        $keyword = $this->request->getVar('query');
        $db      = \Config\Database::connect();
        $builder = $db->table('gedung_a');

        $query = $builder->like('po', $keyword)->orLike('qty', $keyword)->get();
        $result = $query->getResultArray();

        if ($result !== []) {
            foreach ($result as $row) {
                echo "                    
                    <tr>
                        <td class='text-center'>{$row['cell']}</td>
                        <td class='text-center'>{$row['po']}</td>
                        <td class='text-center'>{$row['qty']}</td>
                        <td class='text-center'><a href='detail/{$row['id']}' class='btn btn-sm btn-primary'>Detail</a></td>                                                
                    </tr>
                ";
            }
        } else {
            echo '
                <tr>
                    <td class="text-center text-danger" colspan="6">Data tidak ditemukan!</td>
                </tr>
            ';
        }
    }
}
