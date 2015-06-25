<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    /**
     * 单图文类型.
     */
    const IS_SIMPLE = 1;

    /**
     * 多图文类型.
     */
    const IS_MULTI = 2;

    /**
     * 远程素材类型.
     */
    const IS_REMOTE = 3;

    /**
     * 创建来自自己.
     */
    const CREATED_FROM_SELF = 1;

    /**
     * 创建来自微信
     */
    const CREATED_FROM_WECHAT = 2;

    /**
     * 字段白名单.
     *
     * @var array
     */
    protected $fillable = [
        'account_id',
        'original_id',
        'type',
        'parent_id',
        'title',
        'description',
        'author',
        'content',
        'show_cover_pic',
        'cover_url',
        'created_from',
        'content_url',
        'source_url',
                          ];

    /**
     * 用于表单验证时的字段名称提示.
     *
     * @var array
     */
    public static $aliases = [
        'name' => '公众号名称',
        'original_id' => '原始ID',
                             ];
}
