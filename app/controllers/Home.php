<?php

class Home extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $produits = new Produits();
        $categories = new Categories();
        $photos = new Photos();
        $data = $produits->selectAll();
        if(!empty($data))foreach ($data as $key => $value) {
            $data[$key]['categoriename'] = $categories->categoriename($value['categorie_id']);
            $data[$key]['photo'] = $photos->productPhoto($data[$key]['id']);
            
        }
        //show($data);
        $this->view('home','home',$data);
    }
}
