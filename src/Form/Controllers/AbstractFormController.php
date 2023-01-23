<?php

namespace Abacus\Form\Form\Controllers;

use Abacus\Form\Form\AbstractForm;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;

abstract class AbstractFormController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    abstract public function create(): AbstractForm;

    abstract public function edit(int $model_id, int $id): AbstractForm;
}
