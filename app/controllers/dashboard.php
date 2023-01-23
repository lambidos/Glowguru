<?php

class Dashboard extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $data = [];
        $produits = new Produits();
        $categories = new Categories();
        $data = $produits->selectAll();
        foreach ($data as $key => $value) {
            $data[$key]['categoriename'] = $categories->categoriename($value['categorie_id']);
        }
        //show($data);
        $this->view('dashboard','products_table',$data);
    }
    
    public function categories()
    {
        $categories = new Categories();
        $data = $categories->selectAll();
        $this->view('dashboard','categories_table',$data);
    }
}
