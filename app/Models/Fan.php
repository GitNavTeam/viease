<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fan extends Model
{
    use SoftDeletes;

    /**
     * 字段白名单.
     *
     * @var array
     */
    protected $fillable = [
        'account_id',
        'group_id',
        'openid',
        'nickname',
        'signature',
        'remark',
        'sex',
        'language',
        'city',
        'province',
        'country',
        'avatar',
                          ];

    /**
     * 用于表单验证时的字段名称提示.
     *
     * @var array
     */
    protected $aliases = [
        'account_id' => '公众号ID',
        'group_id' => '粉丝组ID',
        'openid' => 'OPENID',
        'nickname' => '昵称',
        'signature' => '签名',
        'remark' => '备注',
        'sex' => '性别',
        'language' => '语言',
        'city' => '城市',
        'province' => '省份',
        'country' => '国家',
        'avatar' => '头像',
                         ];

    protected $appends = ['location'];

    public function getLocationAttribute()
    {
        return $this->province.' '.$this->city;
    }
}
