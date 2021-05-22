<?php
namespace App\Components;

class Recursive {
    private $data;
    private $htmlSelect = '';
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function recursive($parent_id, $id = 0, $text = '') {
        foreach($this->data as $cate) {
            if($cate->parent_id === $id) {
                if(!empty($parent_id) && $parent_id == $cate->id) {
                    $this->htmlSelect .= "<option selected value=$cate->id >".$text.$cate->name_vi."</option>";
                } else {
                    $this->htmlSelect .= "<option value=$cate->id >".$text.$cate->name_vi."</option>";
                }
                $this->recursive($parent_id, $cate->id, $text. '-');
            }
        }
        return $this->htmlSelect;
    }
}
