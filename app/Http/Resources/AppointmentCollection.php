<?php

namespace App\Http\Resources;

use App\Model\Appointment;
use Illuminate\Http\Resources\Json\ResourceCollection;

class AppointmentCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request): array
    {

        return [
            'data' => $this->collection->transform(function (Appointment $item) {
                unset($item->created_at);
                unset($item->updated_at);

                return $item;
            })
        ];
    }
}
