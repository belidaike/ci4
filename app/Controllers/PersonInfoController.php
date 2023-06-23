<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PersonInfoModel;

class PersonInfoController extends BaseController
{
    public function index()
    {
        $fetchPerson = new PersonInfoModel();
        $data['persons'] = $fetchPerson->findAll();

        return view('personInfo/list', $data);
    }

    public function create(){
        return view('personInfo/create');
    }

    public function store(){
        $insertPersons = new PersonInfoModel();

        $data = array(
            'FIRSTNAME' => $this->request->getPost('personFirst'),
            'LASTNAME' => $this->request->getPost('personLast'),
            'ADDRESS' => $this->request->getPost('personAdd'),
            'DATE' => $this->request->getPost('date'),
        );

        $insertPersons->insert($data);

        return redirect()->to('/persons')->with('success', 'Account Added Successfully!');
    }

    public function edit($id){
        $fetchPerson = new PersonInfoModel();
        $data['person'] = $fetchPerson->where('id', $id)->first();
        
        return view('personInfo/edit', $data);
    }

    public function update($id){
        // update persons info

        $updatePerson = new PersonInfoModel();

        $data = array(
            'FIRSTNAME' => $this->request->getPost('personFirst'),
            'LASTNAME' => $this->request->getPost('personLast'),
            'ADDRESS' => $this->request->getPost('personAdd'),
            'DATE' => $this->request->getPost('date'),
        );

        $updatePerson->update($id, $data);

        return redirect()->to('/persons')->with('success', 'Account Updated Successfully!');
    }

    public function delete($id){
        //delete persons info

        $deletePerson = new PersonInfoModel();
        $deletePerson->delete($id);

        return redirect()->to('/persons')->with('success', 'Person Deleted Successfully!');
    }
}
