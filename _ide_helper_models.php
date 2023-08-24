<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Class Comunidad
 *
 * @property $id
 * @property $titulo
 * @property $lenguaje
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad whereLenguaje($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad whereTitulo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comunidad whereUpdatedAt($value)
 */
	class Comunidad extends \Eloquent {}
}

namespace App\Models{
/**
 * Class Foroall
 *
 * @property $id
 * @property $titulo
 * @property $contenido
 * @property $created_at
 * @property $updated_at
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 * @method static \Illuminate\Database\Eloquent\Builder|Foroall newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Foroall newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Foroall query()
 */
	class Foroall extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

