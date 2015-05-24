<?php
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Organization extends Eloquent implements StaplerableInterface {
    use SoftDeletingTrait;
    use EloquentTrait;

    protected $table = 'organization';

    protected $guarded = array('id');

    public $timestamps = true;

    public function __construct(array $attributes = array()) {
        $this->hasAttachedFile('logo', [
            'styles' => [
            'prompt' => '380',
            'thumb' => '100'
             ]
        ]);

        parent::__construct($attributes);
    }
}