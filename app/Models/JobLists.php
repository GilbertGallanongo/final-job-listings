<?php
namespace App\Models;

use Database\Factories\JobListsFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobLists extends Model
{
    /** @use HasFactory<JobListsFactory> */
    use HasFactory;

    protected $table = 'list_jobs';

    protected $fillable = [
        'title',
        'salary',
        'job_description',
    ];
}
