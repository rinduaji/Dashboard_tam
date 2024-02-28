<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	/*MINI PACK*/

	public function get_jml_agent_minipack()
	{
		$sql="SELECT sum(jumlah_agent) as jml_agent_minipack FROM app_tam_dashboard where jenis='Mini pack'";
		$result= $this->db->query($sql);
		return $result->row()->jml_agent_minipack;
	}
	public function get_jml_call_minipack()
	{
		$sql="SELECT sum(jumlah_call) as jml_call_minipack FROM app_tam_dashboard where jenis='Mini pack'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_minipack;
	}
	public function get_jml_call_contacted_minipack()
	{
		$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_minipack FROM app_tam_dashboard where jenis='Mini pack'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_contacted_minipack;
	}
	public function get_jml_call_agree_minipack()
	{
		$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_minipack FROM app_tam_dashboard where jenis='Mini pack'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_agree_minipack;
	}
	public function get_jml_revenue_minipack()
	{
		$sql="SELECT sum(jumlah_revenue) as jml_revenue_minipack FROM app_tam_dashboard where jenis='Mini pack'";
		$result= $this->db->query($sql);
		return $result->row()->jml_revenue_minipack;
	}
	public function get_jml_rpa_minipack()
	{
		$sql="SELECT sum(rpa) as jml_rpa_minipack FROM app_tam_dashboard where jenis='Mini pack'";
		$result= $this->db->query($sql);
		return $result->row()->jml_rpa_minipack;
	}
	public function get_jml_ppa_minipack()
	{
		$sql="SELECT sum(ppa) as jml_ppa_minipack FROM app_tam_dashboard where jenis='Mini pack'";
		$result= $this->db->query($sql);
		return $result->row()->jml_ppa_minipack;
	}


	/*UPGRADE SPEED*/

	public function get_jml_agent_upgrade_speed()
	{
		$sql="SELECT sum(jumlah_agent) as jml_agent_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
		$result= $this->db->query($sql);
		return $result->row()->jml_agent_upgrade_speed;
	}
	public function get_jml_call_upgrade_speed()
	{
		$sql="SELECT sum(jumlah_call) as jml_call_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_upgrade_speed;
	}
	public function get_jml_call_contacted_upgrade_speed()
	{
		$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_contacted_upgrade_speed;
	}
	public function get_jml_call_agree_upgrade_speed()
	{
		$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_agree_upgrade_speed;
	}
	public function get_jml_revenue_upgrade_speed()
	{
		$sql="SELECT sum(jumlah_revenue) as jml_revenue_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
		$result= $this->db->query($sql);
		return $result->row()->jml_revenue_upgrade_speed;
	}
	public function get_jml_rpa_upgrade_speed()
	{
		$sql="SELECT sum(rpa) as jml_rpa_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
		$result= $this->db->query($sql);
		return $result->row()->jml_rpa_upgrade_speed;
	}
	public function get_jml_ppa_upgrade_speed()
	{
		$sql="SELECT sum(ppa) as jml_ppa_upgrade_speed FROM app_tam_dashboard where jenis='Upgrade Indihome'";
		$result= $this->db->query($sql);
		return $result->row()->jml_ppa_upgrade_speed;
	}

	/*Indihome 2P to 3P*/

	public function get_jml_agent_2p3p()
	{
		$sql="SELECT sum(jumlah_agent) as jml_agent_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_agent_2p3p;
	}
	public function get_jml_call_2p3p()
	{
		$sql="SELECT sum(jumlah_call) as jml_call_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_2p3p;
	}
	public function get_jml_call_contacted_2p3p()
	{
		$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_contacted_2p3p;
	}
	public function get_jml_call_agree_2p3p()
	{
		$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_agree_2p3p;
	}
	public function get_jml_revenue_2p3p()
	{
		$sql="SELECT sum(jumlah_revenue) as jml_revenue_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_revenue_2p3p;
	}
	public function get_jml_rpa_2p3p()
	{
		$sql="SELECT sum(rpa) as jml_rpa_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_rpa_2p3p;
	}
	public function get_jml_ppa_2p3p()
	{
		$sql="SELECT sum(ppa) as jml_ppa_2p3p FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_ppa_2p3p;
	}

	/*SMOOA*/

	public function get_jml_agent_smooa()
	{
		$sql="SELECT sum(jumlah_agent) as jml_agent_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_agent_smooa;
	}
	public function get_jml_call_smooa()
	{
		$sql="SELECT sum(jumlah_call) as jml_call_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_smooa;
	}
	public function get_jml_call_contacted_smooa()
	{
		$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_contacted_smooa;
	}
	public function get_jml_call_agree_smooa()
	{
		$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_agree_smooa;
	}
	public function get_jml_revenue_smooa()
	{
		$sql="SELECT sum(jumlah_revenue) as jml_revenue_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_revenue_smooa;
	}
	public function get_jml_rpa_smooa()
	{
		$sql="SELECT sum(rpa) as jml_rpa_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_rpa_smooa;
	}
	public function get_jml_ppa_smooa()
	{
		$sql="SELECT sum(ppa) as jml_ppa_smooa FROM app_tam_dashboard where jenis='Indihome 2P to 3P'";
		$result= $this->db->query($sql);
		return $result->row()->jml_ppa_smooa;
	}

	/*OTT*/

	public function get_jml_agent_ott()
	{
		$sql="SELECT sum(jumlah_agent) as jml_agent_ott FROM app_tam_dashboard where jenis='OTT'";
		$result= $this->db->query($sql);
		return $result->row()->jml_agent_ott;
	}
	public function get_jml_call_ott()
	{
		$sql="SELECT sum(jumlah_call) as jml_call_ott FROM app_tam_dashboard where jenis='OTT'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_ott;
	}
	public function get_jml_call_contacted_ott()
	{
		$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_ott FROM app_tam_dashboard where jenis='OTT'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_contacted_ott;
	}
	public function get_jml_call_agree_ott()
	{
		$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_ott FROM app_tam_dashboard where jenis='OTT'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_agree_ott;
	}
	public function get_jml_revenue_ott()
	{
		$sql="SELECT sum(jumlah_revenue) as jml_revenue_ott FROM app_tam_dashboard where jenis='OTT'";
		$result= $this->db->query($sql);
		return $result->row()->jml_revenue_ott;
	}
	public function get_jml_rpa_ott()
	{
		$sql="SELECT sum(rpa) as jml_rpa_ott FROM app_tam_dashboard where jenis='OTT'";
		$result= $this->db->query($sql);
		return $result->row()->jml_rpa_ott;
	}
	public function get_jml_ppa_ott()
	{
		$sql="SELECT sum(ppa) as jml_ppa_ott FROM app_tam_dashboard where jenis='OTT'";
		$result= $this->db->query($sql);
		return $result->row()->jml_ppa_ott;
	}

	/*Bundling Netflix*/

	public function get_jml_agent_bundling_netflix()
	{
		$sql="SELECT sum(jumlah_agent) as jml_agent_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
		$result= $this->db->query($sql);
		return $result->row()->jml_agent_bundling_netflix;
	}
	public function get_jml_call_bundling_netflix()
	{
		$sql="SELECT sum(jumlah_call) as jml_call_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_bundling_netflix;
	}
	public function get_jml_call_contacted_bundling_netflix()
	{
		$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_contacted_bundling_netflix;
	}
	public function get_jml_call_agree_bundling_netflix()
	{
		$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_agree_bundling_netflix;
	}
	public function get_jml_revenue_bundling_netflix()
	{
		$sql="SELECT sum(jumlah_revenue) as jml_revenue_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
		$result= $this->db->query($sql);
		return $result->row()->jml_revenue_bundling_netflix;
	}
	public function get_jml_rpa_bundling_netflix()
	{
		$sql="SELECT sum(rpa) as jml_rpa_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
		$result= $this->db->query($sql);
		return $result->row()->jml_rpa_bundling_netflix;
	}
	public function get_jml_ppa_bundling_netflix()
	{
		$sql="SELECT sum(ppa) as jml_ppa_bundling_netflix FROM app_tam_dashboard where jenis='Bundling Netflix'";
		$result= $this->db->query($sql);
		return $result->row()->jml_ppa_bundling_netflix;
	}

	/*UG Arpu =< 100rb*/

	public function get_jml_agent_ug_arpu()
	{
		$sql="SELECT sum(jumlah_agent) as jml_agent_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
		$result= $this->db->query($sql);
		return $result->row()->jml_agent_ug_arpu;
	}
	public function get_jml_call_ug_arpu()
	{
		$sql="SELECT sum(jumlah_call) as jml_call_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_ug_arpu;
	}
	public function get_jml_call_contacted_ug_arpu()
	{
		$sql="SELECT sum(jumlah_call_contacted) as jml_call_contacted_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_contacted_ug_arpu;
	}
	public function get_jml_call_agree_ug_arpu()
	{
		$sql="SELECT sum(jumlah_call_agree) as jml_call_agree_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
		$result= $this->db->query($sql);
		return $result->row()->jml_call_agree_ug_arpu;
	}
	public function get_jml_revenue_ug_arpu()
	{
		$sql="SELECT sum(jumlah_revenue) as jml_revenue_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
		$result= $this->db->query($sql);
		return $result->row()->jml_revenue_ug_arpu;
	}
	public function get_jml_rpa_ug_arpu()
	{
		$sql="SELECT sum(rpa) as jml_rpa_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
		$result= $this->db->query($sql);
		return $result->row()->jml_rpa_ug_arpu;
	}
	public function get_jml_ppa_ug_arpu()
	{
		$sql="SELECT sum(ppa) as jml_ppa_ug_arpu FROM app_tam_dashboard where jenis='UG Arpu =< 100rb'";
		$result= $this->db->query($sql);
		return $result->row()->jml_ppa_ug_arpu;
	}

	/*Total All*/

	public function get_sum_all_agent()
	{
		$sql="SELECT sum(jumlah_agent) as jml_sum_agent FROM app_tam_dashboard";
		$result= $this->db->query($sql);
		return $result->row()->jml_sum_agent;
		$jmlagnt = $this->get_jml_agent_minipack;
		dst...
		$totsum = $jmlagnt + ... + ..;
	}
}

