<?php
namespace MoloPrettus\Repository\Events;

/**
 * Class RepositoryEntityCreated
 * @package Prettus\Repository\Events
 */
class RepositoryEntityCreated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "created";
}
