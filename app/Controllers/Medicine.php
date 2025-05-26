<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MedicineModel;

class Medicine extends BaseController
{
    protected $medicineModel;

    public function __construct()
    {
        $this->medicineModel = new MedicineModel();
    }

    public function index()
    {
        $data['medicines'] = $this->medicineModel->findAll();
        return view('medicines/index', $data);
    }

    public function create()
    {
        return view('medicines/create');
    }

    public function store()
    {
        $this->medicineModel->save([
            'name'     => $this->request->getPost('name'),
            'dosage'   => $this->request->getPost('dosage'),
            'schedule' => $this->request->getPost('schedule'),
            'taken'    => 0
        ]);

        return redirect()->to('/medicine');
    }

    public function edit($id)
    {
        $data['medicine'] = $this->medicineModel->find($id);
        return view('medicines/edit', $data);
    }

    public function update($id)
    {
        $this->medicineModel->update($id, [
            'name'     => $this->request->getPost('name'),
            'dosage'   => $this->request->getPost('dosage'),
            'schedule' => $this->request->getPost('schedule'),
        ]);

        return redirect()->to('/medicine');
    }

    public function delete($id)
    {
        $this->medicineModel->delete($id);
        return redirect()->to('/medicine');
    }

    public function markAsTaken($id)
    {
        $this->medicineModel->update($id, ['taken' => 1]);
        return redirect()->to('/medicine');
    }

    public function view($id)
{
    $medicine = $this->medicineModel->find($id);

    if (!$medicine) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Medicine not found.');
    }

    return view('medicines/view', ['medicine' => $medicine]);
}

}
