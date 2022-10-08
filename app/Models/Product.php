<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getId() 
    {
        return $this->attributes['id'];
    }
    public function setId($id) 
    {
        $this->attributes['id'] = $id;
    }
    public function getName() 
    {
        return $this->attributes['name'];
    }
    public function setName($name) 
    {
        $this->attributes['name'] = $name;
    }
    public function getDescription() 
    {
        return $this->attributes['description'];
    }
    public function setDescription($description) 
    {
        $this->attributes['description'] = $description;
    }
    public function getImage() 
    {
        return $this->attributes['image'];
    }
    public function setImage($image) 
    {
        $this->attributes['image'] = $image;
    }
    public function getPrice() 
    {
        return $this->attributes['price'];
    }
    public function setPrice($price) 
    {
        $this->attributes['price'] = $price;
    }
    public function getCreateAt() 
    {
        return $this->attributes['created_at'];
    }
    public function setCreateAt($createdAt) 
    {
        $this->attributes['created_at'] = $createdAt;
    }
    public function getUpdateAt() 
    {
        return $this->attributes['updated_at'];
    }
    public function setUpdateAt($updatedAt) 
    {
        $this->attributes['updated_at'] = $updatedAt;
    }
}