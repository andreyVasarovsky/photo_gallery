<?php


namespace App\Services\Admin\Theme;

use App\Models\Theme;
use Illuminate\Support\Facades\Redirect;

class Service
{
    public function delete(Theme $theme): array
    {
        if ($theme->photos->count() > 0) {
            return [
                'status' => false,
                'msg' => 'Нельзя удалять тему в которой привязаны фотографии!'
            ];
        }

        $theme->delete();

        return ['status' => true, 'msg' => ''];
    }
}
