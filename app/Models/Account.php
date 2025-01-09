<?php
namespace App\Models;
use CodeIgniter\Model;
class Account extends Model
{
    protected $table = 'account';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'fullname'];
}