<?php
namespace Chinook\V1\Rpc\About;

class AboutControllerFactory
{
    public function __invoke($controllers)
    {
        return new AboutController();
    }
}
