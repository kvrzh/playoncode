<?php

/**
 * Created by PhpStorm.
 * User: bizremy
 * Date: 19.10.16
 * Time: 10:47
 */
class Tournaments_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }
    function getTournament($id){
        $this->db->select('*');
        $this->db->where('id',$id);
        $query = $this->db->get('tournaments');
        if($query->row('id')){
            $tournament['id'] = $query->row('id');
            $tournament['name'] = $query->row('name');
            $tournament['date'] = $query->row('date');
            $tournament['status'] = $query->row('status');
            $tournament['players'] = $query->row('players');
            $tournament['type'] = $query->row('type');
            $tournament['max_players'] = $query->row('max_players');
        }
        return $tournament;
    }
    function getAllTournaments(){
        $this->db->select('*');
        $query = $this->db->get('tournaments');
        $status = $this->db->count_all_results();
        if($status == 0){
            return false;
        }
        foreach($query->result_array() as $row){
            $result[] = $row;
        }
        return $result;
    }

    function getPlayers($id)
    {
        $this->db->select('login');
        $this->db->join('tournaments_users', 'users.id=user_id', 'inner');
        $this->db->join('tournaments', "tournament_id=tournaments.id", 'inner');
        $this->db->where('tournament_id', $id);
        $query = $this->db->get('users');
        foreach ($query->result_array() as $row) {
            $result[] = $row;
        }
        return $result;
    }
}