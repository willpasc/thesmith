<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 16 Jan 2019 09:00:13 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class ContactMessage
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class ContactMessage extends Eloquent
{

	protected $fillable = [
		'name',
		'email',
		'subject',
		'message',
		'created_at'
	];
    public $timestamps = false;

}
