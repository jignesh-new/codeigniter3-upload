<?php
class Crud extends CI_Model
{
    // fetch data
    public function fetch()
    {
        return $this->db->get('ajax')->result_array();
    }
    // insert data
    public function insert($data)
    {
        return $this->db->insert('ajax', $data);
    }
    // delete data
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('ajax');
    }
    // EDit data
    public function edit($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('ajax')->row();
    }
    // update
    public function update($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('ajax', $data);
    }
}
