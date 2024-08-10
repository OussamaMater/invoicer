<?php

namespace App\Models;

use App\Models\Customer;
use App\Enums\InvoiceStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
	use HasFactory;

	protected $casts = [
		'status' => InvoiceStatus::class,
		'customer_details' => 'object',
		'issuer_details' => 'object',
		'items' => 'object',
	];

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
}
