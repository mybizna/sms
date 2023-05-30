<?php

namespace Modules\Sms\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Base\Http\Controllers\BaseController;
use Modules\Sms\Entities\Outgoing;

class OutgoingController extends BaseController
{

    public function outgoing(Request $request, $secretkey = '')
    {
        $result = '';

        $data = $request->all();
        $configed_secretkey = 'YOURSECRETKEY';

        $secretkey = (isset($data['secretkey'])) ? $data['secretkey'] : $secretkey;

        if ($secretkey == $configed_secretkey) {
            try {

                $record = Outgoing::select(['id', 'phone', 'sms'])
                    ->where('is_sent', false)
                    ->orderBy('id')
                    ->first();

                $separator = '|';
                $sms = $record->sms;
                $phone = $record->phone;
                $id = str_pad($record->id, 16, " ", STR_PAD_LEFT);
                $phone = str_pad($record->phone, 16, " ", STR_PAD_LEFT);

                $result = $id . $separator . $phone . $separator . $sms;

            } catch (\Throwable $th) {
                throw $th;
            }
        }

        return response($result, 200)->header('Content-Type', 'text/plain');

    }

    public function outgoing_update(Request $request)
    {
        $result = [];

        $data = $request->all();

        try {

            $outgoing = Outgoing::where($data)->first();
            $outgoing->is_sent = true;
            $outgoing->save();

        } catch (\Throwable $th) {
            throw $th;
        }

        return response()->json($result);
    }

}
