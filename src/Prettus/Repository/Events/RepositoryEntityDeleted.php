<?php
namespace MoloPrettus\Repository\Events;

/**
 * Class RepositoryEntityDeleted
 * @package Prettus\Repository\Events
 */
class RepositoryEntityDeleted extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "deleted";
}
