<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home/beranda');
    }

    public function label()
    {
        return view('home/label');
    }

    public function vcb()
    {
        return view('home/vcb');
    }

    public function hasilLabel()
    {
        $gedung = $this->request->getVar('gedung');
        $keyword = $this->request->getVar('po');
        $db      = \Config\Database::connect();

        if ($gedung == 'A') {

            $query   = $db->query("SELECT * FROM gedung_a WHERE po=" . $keyword . "");
            $result  = $query->getRow();

            if (isset($result)) {
                $data = [
                    'hasil' => $result
                ];

                return view('home/hasilLabel', $data);
            } else {
                session()->setFlashdata('error', 'PO tidak ditemukan! Pastikan input PO yang benar.');
                return redirect()->to(base_url('label'));
            }
        } else if ($gedung == 'B') {
            $query   = $db->query("SELECT * FROM gedung_b WHERE po=" . $keyword . "");
            $result  = $query->getRow();

            if (isset($result)) {
                $data = [
                    'hasil' => $result
                ];

                return view('home/hasilLabel', $data);
            } else {
                session()->setFlashdata('error', 'PO tidak ditemukan! Pastikan input PO yang benar.');
                return redirect()->to(base_url('label'));
            }
        } else {
            $query   = $db->query("SELECT * FROM gedung_e WHERE po=" . $keyword . "");
            $result  = $query->getRow();

            if (isset($result)) {
                $data = [
                    'hasil' => $result
                ];

                return view('home/hasilLabel', $data);
            } else {
                session()->setFlashdata('error', 'PO tidak ditemukan! Pastikan input PO yang benar.');
                return redirect()->to(base_url('label'));
            }
        }
    }
}
