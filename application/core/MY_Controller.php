<?php

class MY_Controller extends CI_Controller {

    public $title = '';

    protected $updatedon; 
    protected $updatedby;

    function __construct() {

        $flg = 0;
        parent::__construct();
        $controller = $this->router->class;
        $method = $this->router->method;
        // echo 'controller = '.$controller.' method = '.$method;exit;
        $pages = array(


            array('c' => 'restricted', 'm' => 'index'),
            array('c' => 'restricted', 'm' => 'sendemail'),
            array('c' => 'signin', 'm' => 'index'),
            array('c' => 'signin', 'm' => 'logincheck'),
            array('c' => 'signin', 'm' => 'forgotpassword'),
            array('c' => 'signin', 'm' => 'forgetpassword'),
            array('c' => 'signin', 'm' => 'resetpassword'),
            array('c' => 'signin', 'm' => 'update_loginpassword'),
            array('c' => 'welcome', 'm' => 'updateresidentgender'),
        );

        foreach ($pages as $page) {

            if ($controller == $page['c'] && $method == $page['m']) {
                $flg = 1;
                // echo $page['c']."hh".$page['m'];
                break;
            } else {
                $flg = 0;
            }
        }
        if ($flg == 0) {
            $this->check_isvalidated();
        }

        $this->updatedon = get_updated_on();
        $this->updatedby = get_login_id();     
    }
	public function getadlversionset()
	{
		$this->load->model('nursing/adlassessmentsettings_model', 'asseset');
		return $this->asseset->getadlassessettingsdet();
	}
	public function getaccidntincdntset()
	{
		$this->load->model('nursing/accidentincidentsettings_model', 'indtvrsn');
		return $this->indtvrsn->getincidentversiondet();
	}
	
    public function notificationcareplan() {
		$this->load->model('nursing/adlassessmentsettings_model', 'asseset');
		$adlversionst = $this->asseset->getadlassessettingsdet();
		$adlcompvrsn = 0;
		if($adlversionst)
		{
			if($adlversionst[0]->as_assessmentversion == '1')
			{
				$adlcompvrsn = 1;
			}
		}
		
        $todaydate = date('Y-m-d');
        /*$this->load->model('resident/rescareplan_model', 'rescare');
        return $this->rescare->selecttodayrescareplans($todaydate);*/
		$this->load->model('employee/employeetraining_model', 'exbase');
        //$data['controller'] = $this;
		if($adlcompvrsn == 0)
		{
        	return $this->exbase->getcareplanlists();
		}
		else{
			return $this->exbase->compgetcareplanlists();
		}
        //$data['waterlows'] = $this->wat->selectpendingwalowlist($todaydate);
    }
    public function notificationaudit(){
        $this->load->model('welcome/restraintuseaudit_model', 'restrntadt');
        $todaydate = date('Y-m-d');
        return $this->restrntadt->selectpendingauditreviewlistdue($todaydate);
    }

    public function notificationwaterlow() {
        $todaydate = date('Y-m-d');
        $this->load->model('resident/waterlowassessment_model', 'wat');
        return $this->wat->selectpendingwalowlist($todaydate);
    }
    public function getwaterlowreviewdate($wtrid){
    	$this->load->model('resident/waterlowassessment_model', 'wat');
    	return $this->wat->selectedwaterreview($wtrid);
    }
	public function notificationmanualhandlingtwo(){
		$todaydate = date('Y-m-d');
		$this->load->model('resident/manualhandlingcharttwo_model', 'mhct');
		return $this->mhct->manualhandling2notifications();
	}
	public function notificationfallcheckliststaff()
	{
		$this->load->model('resident/fallschecklistforstaff_model', 'fclfs');
		return $this->fclfs->fallcheckliststafnotifications();
	}
	public function notificationrevisedmmse()
	{
		$this->load->model('resident/revisedmmseassessment_model', 'mmse');
		return $this->mmse->revisedmmsenotifications();
	}
	public function notificationphysioassessments()
	{
		$this->load->model('resident/physiotherapyassessment_model', 'pta');
		return $this->pta->physiotherapynotifications();
	}
	public function notificationbedrailassessments()
	{
		$this->load->model('resident/residentbedrailassessment_model', 'rbda');
		return $this->rbda->bedrailassesnotifications();
	}
	public function notificationrestraintassessments()
	{
		$this->load->model('resident/restraintassessment_model', 'rta');
		return $this->rta->restraintassesnotifications();
	}
	public function notificationresactivityplans()
	{
		$this->load->model('resident/residentactivitesplanassessment_model', 'rap');
		return $this->rap->resactivityplannotifications();
	}
	public function notificationabbeypainscales()
	{
		$this->load->model('resident/abbeypainscaleassessment_model', 'aps');
		return $this->aps->getabbeypainscalebotifications();
	}
	public function notificationmanualhandlingchart(){
		$todaydate = date('Y-m-d');
		$this->load->model('resident/manualhandlingchart_model', 'manhand');
		return $this->manhand->manualhandlingchartnotifications();
	}
	public function notificationresidentcmai()
	{
		$this->load->model('resident/residentcmai_model', 'rescmai');
		return $this->rescmai->rescmainotifications();
	}
	public function notificationresidentohat()
	{
		$this->load->model('resident/residentohat_model', 'resohat');
		return $this->resohat->resohatnotifications();
	}
	public function notificationresidentgdsscoring()
	{
		$this->load->model('resident/residentgdsscoring_model', 'resgds');
		return $this->resgds->resgdsscoringnotifications();
	}
	public function notificationresidentfrat()
	{
		$this->load->model('resident/residentfratstatus_model', 'resfrat');
		return $this->resfrat->residentfratnotifications();
	}
	public function notificationpriorusebedrails()
	{
		$this->load->model('resident/bedrailassessment_model', 'resbdrail');
		return $this->resbdrail->priorusebedrailsnotifications();
	}
	public function notificationevacuationplan()
	{
		$this->load->model('resident/personalevacuationplan_model', 'evctn');
		return $this->evctn->evacuationplannotifications();
	}
	public function notificationoralcavityases()
	{
		$this->load->model('resident/oralcavityassessment_model', 'ocam');
		return $this->ocam->oralcavityasesnotifications();
	}
	public function notificationmustases()
	{
		$this->load->model('resident/resmustassessment_model', 'mustass');
		return $this->mustass->mustassessmntnotifications();
	}
	public function notificationressmmse()
	{
		$this->load->model('resident/resmmse_model', 'resmms');
		return $this->resmms->ressmmsenotifications();
	}
	public function notificationrescsdd()
	{
		$this->load->model('resident/csddassessment_model', 'csdd');
		return $this->csdd->rescsddnotifications();
	}
	public function notificationabcincident()
	{
		$this->load->model('resident/abcincidentchart_model', 'abc');
		return $this->abc->abcincidentnotifications();
	}
	public function notificationglasgowcoma()
	{
		$this->load->model('resident/comascaleneurologicalchart_model', 'cmascle');
		return $this->cmascle->glasgowcomanotifications();
	}
	public function notificationsmokingasses()
	{
		$this->load->model('resident/smokingassessment_model', 'smkases');
		return $this->smkases->smokingassesnotifications();
	}
	public function notificationskinassessment()
	{
		$this->load->model('resident/skinassessment_model', 'sknasmt');
		return $this->sknasmt->skinassessmentnotifications();
	}
	public function notificationoralhealthasses()
	{
		$this->load->model('resident/oralhealthassessment_model', 'ohases');
		return $this->ohases->oralhealthassesnotifications();
	}
	public function notificationendoflife()
	{
		$this->load->model('resident/endoflifecare_model', 'endlfe');
		return $this->endlfe->endoflifenotifications();
	}
	public function notificationadmissioncheck()
	{
		$this->load->model('resident/admissionchecklistassessment_model', 'ac');
		return $this->ac->admissionchecknotifications();
	}
	public function notificationtinettigait()
	{
		$this->load->model('resident/tinittiassessmenttool_model', 'tnti');
		return $this->tnti->tinettigaitnotifications();
	}
	public function notificationpainasseschart()
	{
		$this->load->model('resident/painassessmentchart_model', 'pac');
		return $this->pac->painasseschartnotifications();
	}
	public function notificationtinettiblnce()
	{
		$this->load->model('resident/tinettibalancetool_model', 'tbt');
		return $this->tbt->tinettiblncenotifications();
	}
	public function notificationriskhandltask()
	{
		$this->load->model('resident/riskassessmentrecoedreshandling_model', 'rah');
		return $this->rah->riskhandltasknotifications();
	}
	public function notificationconfusionasses()
	{
		$this->load->model('resident/confusionassessment_model', 'cnfnases');
		return $this->cnfnases->confusionassesnotifications();
	}
	public function notificationcognitiveimpair()
	{
		$this->load->model('resident/cognitivelyimpaired_model', 'cognimp');
		return $this->cognimp->cognitiveimpairnotifications();
	}
	public function notificationbedrailasesnew()
	{
		$this->load->model('resident/bedrailassessmentnew_model', 'bdrailnw');
		return $this->bdrailnw->bedrailasesnewnotifications();
	}
	public function notificationmedicationcareplan()
	{
		$this->load->model('resident/medicationcareplan_model', 'medcrpln');
		return $this->medcrpln->medicationcareplannotifications();
	}

	// New notifications
	public function notificationabbreviatedtestscore()
	{
		$this->load->model('resident/abbreviatedmentaltest_model', 'abbrmnt');
		return $this->abbrmnt->abbreviatedmentaltestnotifications();
	}
	public function notificationbedrailriskassessment()
	{
		$this->load->model('resident/bedrailriskassessment_model', 'bdrlrsk');
		return $this->bdrlrsk->bedrailriskassesnotifications();
	}
	public function notificationbergbalancescale()
	{
		$this->load->model('resident/bergbalancescale_model', 'bbsases');
		return $this->bbsases->bergbalancescalenotifications();
	}
	public function notificationbradenscaleppsorerisk()
	{
		$this->load->model('resident/bradenscalepressuresore_model', 'brndsore');
		return $this->brndsore->bradenscalepressurenotifications();
	}
	public function notificationchallenginbehaviour()
	{
		$this->load->model('resident/episodemonitoring_model', 'epimon');
		//return $this->epimon->episodemonitornotifications();
		return false;
	}
	public function notificationcontinenceassessment()
	{
		$this->load->model('resident/residentcontinenceassessment_model', 'rca');
		return $this->rca->continenceassessmentnotifications();
	}
	public function notificationfallriskassescale()
	{
		$this->load->model('resident/fallsriskassessmentscale_model', 'fras');
		return $this->fras->fallriskassessmentnotifications();
	}
	public function notificationformalrestrassess()
	{
		$this->load->model('resident/formalrestraintassessment_model', 'frmlrestr');
		return $this->frmlrestr->formalrestraintassesnotifications();
	}
	public function notificationidentifychallenging()
	{
		$this->load->model('resident/identificationchallenge_model', 'idntchall');
		return $this->idntchall->identificationchallendenotifications();
	}
	public function notificationneuroobserchart()
	{
		$this->load->model('resident/neuroobservationschedule_model', 'nerobsr');
		//return $this->nerobsr->neuroobservationschnotifications();
		return false;
	}
	public function notificationvideoconsentform()
	{
		$this->load->model('resident/photographyconcent_model', 'phtocnsnt');
		return false;
	}
	public function notificationphysiotherapyassesnew()
	{
		$this->load->model('resident/physiotherapyasses_model', 'physrpy');
		return $this->physrpy->physiotherapyassesnotifications();
	}
	public function notificationpropertychart()
	{
		$this->load->model('resident/residentpropertychart_model', 'prprtychrt');
		return $this->prprtychrt->propertychartnotifications();
	}
	public function notificationselfadminmedicine()
	{
		$this->load->model('resident/selfadministermedicinedet_model', 'slfmedtl');
		return $this->slfmedtl->selfadministermedicinenotifications();
	}
	public function notificationselfmedriskassess()
	{
		$this->load->model('resident/selfmedicationriskasses_model', 'slfmdctn');
		return $this->slfmdctn->selfmedicationriskassessments();
	}
	public function notificationterminallifecp()
	{
		$this->load->model('resident/terminalendcareplan_model', 'termcrepl');
		return $this->termcrepl->terminalendcareplannotifications();
	}
	public function notificationtissueviability()
	{
		return false;
	}


	public function residentwardbeddetails($resid)
	{
		$this->load->model('resident/residentadmissiondetailbasic_model', 'admbasic');
		return $this->admbasic->selectbeddetails($resid);
	}

    public function notificationaccident() {
        $todaydate = date('Y-m-d');
        $this->load->model('resident/accidentincident_model', 'acinc');
        return $this->acinc->selectpendingaccidentincident($todaydate);
    }
    public function selectedaccidentreview($accid)
    {
    	$this->load->model('resident/accidentincident_model', 'acinc');
        return $this->acinc->selectaccidentreview($accid);
    }

    public function notificationmedication() {
        $todaydate = date('Y-m-d');
        $this->load->model('resident/rescareplan_model', 'rescare');
        return $this->rescare->gettodaymedication($todaydate);
    }

    public function notificationempreviews() {
        $todaydate = date('Y-m-d');
        $this->load->model('employee/employeereview_model', 'emprev');
        return $this->emprev->selectallempreviews();
    }

    public function notificationlastempreviews($typeid, $userid) {
        $todaydate = date('Y-m-d');
        $this->load->model('employee/employeereview_model', 'emprev');
        return $this->emprev->lastemplreview($typeid, $userid);
    }

    public function notificationobservation() {
        $todaydate = date('Y-m-d');
        $this->load->model('resident/reminderdates_model', 'remdate');
        return $this->remdate->gettodayobservations($todaydate);
    }

    public function notifyfamilycomplaints($usrid) {
        $this->load->model('family/familycomplaints_model', 'famcmplt');
        return $this->famcmplt->assignedcomplaints($usrid);
    }
    
    public function notificationbarthelrevw(){
        $this->load->model('resident/bartheladlindex_model', 'brthlindx');
        return $this->brthlindx->bartheladlreviewnotfication();
    }
    
    public function notificationappointments(){
        $this->load->model('resident/appointments_model', 'apntmnt');
        return $this->apntmnt->appointmentnotification();
    }
    
    public function notificationempappointments(){
        $this->load->model('resident/appointments_model', 'apntmnt');
        return $this->apntmnt->appointmentempnotification();
    }
    
   
/*********************** Comprehensive / ADL notiifications functions *******************/
    public function notificationsafeenvrnmnt(){
        $this->load->model('resident/maintainsafeenvironment_model', 'seadl');
        return $this->seadl->safeenvrnmntnotifications();
        //return false;
    }
	public function notificationcompsafeenvrnmnt(){
		$this->load->model('resident/compsafeenvironment_model', 'secomp');
		return $this->secomp->compsafeenvrnmntnotifications();
	}
	
    public function notificationcommunication(){
        $this->load->model('resident/adlcommunication_model', 'adlcmn');
        return $this->adlcmn->communicationnotifications();
    }
	public function notificationcompcommunication(){
		$this->load->model('resident/compcommunication_model', 'comcomp');
		return $this->comcomp->compcommunicationnotifications();
		//return false;
	}
	
    public function notificationmobility(){
        $this->load->model('resident/adlmobility_model', 'adlmblty');
        return $this->adlmblty->mobilitynotifications();
        //return false;
    }
	public function notificationcompmobility(){
		$this->load->model('resident/compmobility_model', 'mobcomp');
		return $this->mobcomp->compmobilitynotifications();
	}
	
	public function notificationbreathing(){
        $this->load->model('resident/adlbreathing_model', 'adlbrthg');
        return $this->adlbrthg->breathingnotifications();
        //return false;
    }
	public function notificationcompbreathing(){
		$this->load->model('resident/compbreathing_model', 'brthcomp');
		return $this->brthcomp->compbreathingnotifications();
	}
	
    public function notificationbodytemp(){
        $this->load->model('resident/adlbodytemperature_model', 'adlbdytemp');
        return $this->adlbdytemp->bodytempnotifications();
        //return false;
    }
	public function notificationcompbodytemp(){
		$this->load->model('resident/compbodytempsensitivity_model', 'bdytmpcomp');
		return $this->bdytmpcomp->compbodytempnotifications();
	}
	
    public function notificationsocialinterctn(){
        $this->load->model('resident/adlsocialinteraction_model', 'adlsclintr');
        return $this->adlsclintr->socialinteractionnotifications();
        //return false;
    }
	public function notificationcompsocialinterctn(){
		$this->load->model('resident/compsocialinteraction_model', 'socintrcomp');
		return $this->socintrcomp->compsocialinteractionnotifications();
	}
	
    public function notificationeatdrink(){
        $this->load->model('resident/adlfoodeatanddrink_model', 'adleatdrnk');
        return $this->adleatdrnk->eatanddrinknotifications();
        //return false;
    }
	public function notificationcompeatdrink(){
		$this->load->model('resident/compeatanddrink_model', 'eatdrnkcomp');
		return $this->eatdrnkcomp->compeatanddrinknotifications();
	}
	
    public function notificationelimination(){
        $this->load->model('resident/adlelimination_model', 'adlelmntn');
        return $this->adlelmntn->eliminationnotifications();
        //return false;
    }
	public function notificationcompelimination(){
		$this->load->model('resident/compelimination_model', 'elmntncomp');
		return $this->elmntncomp->compeliminationnotifications();
	}
	
    public function notificationskinassmnt(){
        $this->load->model('resident/adlskinassessment_model', 'adlsknass');
        return $this->adlsknass->skinassessmentnotifications();
        //return false;
    }
	public function notificationcompskinassmnt(){
		$this->load->model('resident/compskinassessment_model', 'sknasscomp');
		return $this->sknasscomp->compskinassessmentnotifications();
	}
	
    public function notificationdressing(){
        $this->load->model('resident/adlpersonalcareanddressing_model', 'adlprsnlcre');
        //return $this->adlprsnlcre->personalcaredresnotifications();
        return false;
    }
	public function notificationcompdressing(){
		$this->load->model('resident/comppersonalcaredress_model', 'prsnlcomp');
		return $this->prsnlcomp->comppersonalcaredresnotifications();
	}
	
    public function notificationsexuality(){
        $this->load->model('resident/adlexpresssexuality_model', 'adlexprsex');
        return $this->adlexprsex->sexualitynotifications();
        //return false;
    }
	public function notificationcompsexuality(){
		$this->load->model('resident/compsexuality_model', 'sxulcomp');
		return $this->sxulcomp->compsexualitynotifications();
	}
	
    public function notificationsleeping(){
        $this->load->model('resident/adlsleeping_model', 'adlslpng');
        return $this->adlslpng->sleepingnotifications();
        //return false;
    }
	public function notificationcompsleeping(){
		$this->load->model('resident/compsleeping_model', 'slpngcomp');
		return $this->slpngcomp->compsleepingnotifications();
	}
	
    public function notificationspirituality(){
        $this->load->model('resident/adlspirituality_model', 'adlsprtual');
        return $this->adlsprtual->spiritualitynotifications();
        //return false;
    }
	public function notificationcompspirituality(){
		$this->load->model('resident/compspirituality_model', 'sprtualcomp');
		return $this->sprtualcomp->compspiritualitynotifications();
	}
	
    public function notificationdying(){
        $this->load->model('resident/adldying_model', 'adldyng');
        return $this->adldyng->dyingnotifications();
        //return false;
    }
	public function notificationcompdying(){
		$this->load->model('resident/compendstageoflife_model', 'endlfecomp');
		return $this->endlfecomp->compdyingnotifications();
	}
	
    public function notificationpsychosocial(){
        $this->load->model('resident/adlpsychosocialwellbeing_model', 'adlpsycho');
        return $this->adlpsycho->psychosocialnotifications();
        //return false;
    }
	public function notificationcomppsychosocial(){
		$this->load->model('resident/comppsychosocial_model', 'psychocomp');
		return $this->psychocomp->comppsychosocialnotifications();
	}
	
	public function notificationaccidentincident(){
		$this->load->model('resident/residentfallreport_model', 'fallrprt');
		return $this->fallrprt->accidentnotifications();
	}
	public function notificationaccidentfallreport($accid){
		$this->load->model('resident/residentfallreport_model', 'fallrprt');
		return $this->fallrprt->getaccidentfallreport($accid);
	}
	
	public function notificationtransferreturn(){
		$this->load->model('resident/patienttransferinfo_model', 'trnsfrinfo');
		$todate = date('Y-m-d');
		return $this->trnsfrinfo->gettransferreturnnotifications($todate);
	}
	public function notificationtraining(){
		$this->load->model('employee/employeetraining_model', 'emtrain');
		return $this->emtrain->getallemployeetrainingnot();
	}
	public function gettodayobservationtakedetails($resid, $obfield)
	{
		$this->load->model('resident/resadmobservation_model', 'ob');
		return $this->ob->gettodayobservationtakedetails($resid, $obfield);
	}
	public function getresidentdetails($resid)
	{
		$this->load->model('resident/rescareplan_model', 'rescare');
		return $this->rescare->resdetailsbyid($resid);
	}
	public function getuserdetails($userid)
	{
		$this->load->model('resident/rescareplan_model', 'rescare');
		return $this->rescare->getuserdetails($userid);
	}
	public function getreviewtypedetail($typeid)
	{
		$this->load->model('employee/employeetraining_model', 'emtrain');
		return $this->emtrain->getreviewtypedetails($typeid);
	}
	public function getallholidaynotification()
	{
		$this->load->model('employee/employeetraining_model', 'emtrain');
		return $this->emtrain->getallholidaynotification();
	}
	public function privatemessagelist($userid)
	{
		$this->load->model('employee/employeetraining_model', 'emtrain');
		return $this->emtrain->getprivatemsgnotification($userid);
	}
	public function gorupmesagelist($userid)
	{
		$this->load->model('employee/employeetraining_model', 'emtrain');
		return $this->emtrain->getgroupmsgnotification($userid);
	}
	public function firstresidentid()
	{
		$this->load->model('employee/employeetraining_model', 'emtrain');
		return $this->emtrain->getfirstresidentdetails();
	}
	public function lastlogindetails($userid)
	{
		$this->load->model('employee/employeetraining_model', 'emtrain');
		return $this->emtrain->getlastlogindetails($userid);
	}

    public function render($content, $view = 'content_page') {

        $data['content'] = &$content;
        $this->load->view("$view", $data);
    }

    private function check_isvalidated() {
        $session_id = $this->session->userdata('loginid');
//                echo $session_id;
//                exit;
        if ($session_id == FALSE) {
            redirect('restricted');
        }
    }

    public function do_logout() {
        $session_id = $this->session->userdata('loginid');
        $curdate = date('Y-m-d H:i:s');
        $this->load->model('nursing/activity_model', 'actlog');
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        $adactvty = $this->actlog->insert(array(
            'userid' => $session_id,
            'logaction' => "Logged out",
            'page' => "Home",
            'logtime' => $curdate,
            'ipaddress' => $ipaddress
                ), TRUE);
        $this->session->sess_destroy();
        redirect('signin');
    }
    public function userdocumentsigningrequestall(){
    $this->load->model('nursing/documentsignrequest_model', 'docsign');
    $session_id = $this->session->userdata('loginid');
    return $this->docsign->getalldocumentsignrequest($session_id);
  }

}

/* The MX_Controller class is autoloaded as required */