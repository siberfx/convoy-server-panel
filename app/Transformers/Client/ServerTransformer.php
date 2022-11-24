<?php

namespace Convoy\Transformers\Client;

use Convoy\Data\Server\Eloquent\ServerEloquentData;
use Convoy\Enums\Network\AddressType;
use Convoy\Models\Server;
use League\Fractal\TransformerAbstract;

class ServerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(ServerEloquentData $server)
    {
        $data = $server->toArray();

        $data['internal_id'] = $data['id'];
        $data['id'] = $data['uuid_short'];
        unset($data['uuid_short']);

        return $data;
    }
}
