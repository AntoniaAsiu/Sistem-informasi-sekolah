<?php

namespace App\Models;

use CodeIgniter\Model;

    class tahun_ajarmodel extends Model
    {
    protected $DBGroup               = 'default';
    protected $table                 = 'tahun_ajar';
    protected $primarykey            = 'id';
    protected $useautoincrement      = true;
    protected $insertid              = 0;
    protected $returnType            = 'array';
    protected $useSoftDeletes        = false;
    protected $protectfields         = true;
    protected $allowedfield          = [];
    
    //Dates

    protected $useTimestamps         = true;
    protected $dateformat            = 'datetime';
    protected $createdField          = 'created_at';
    protected $updatedField          = 'updated_at';
    protected $deletedField          = 'deleted_at';
       
}
