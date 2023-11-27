<?php

class Ajax extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_m');
        $this->load->model('vehicles_m', 'mv');
        $this->load->model('utilities_m', 'mu');
    }

    function configurations(){
        
        echo json_encode(array(
            'success' => 1,
            'error' => '',
            'data' => array(
                'url' => site_url()
            )
        ));
    }

    function validate(){

        $user = $this->users_m->login_call(array(
            'user_name' => $this->input->post('user_name'),
            'password' => $this->input->post('password'),
        ));

        if($user){

            
            $this->session->set_userdata("is_admin",true);
                
				$data=array(
					'email'=>$user['email'],
					'first_name' => $user['first_name'],
					'last_name' => $user['last_name'],
					'id' => $user['id'],
					'login' => TRUE,
					'user_group_id' => $user['user_group_id']
				);
                $this->session->set_userdata("user_session",$data);
                
            echo json_encode(array(
                'success' => 1,
                'error' => '<b>login successful</b> Redirection in progress....',
                'redirect' => site_url('dashboard'),
                'data' => $user
            ));

            


        }else {

            echo json_encode(array(
                'success' => 0,
                'error' => '<b>Invalid credentials</b> Please check your credentials!',
                'redirect' => '',
                'data' => array(
                )
            ));
        }
    die;

    }


    function get_vehicles(){

        
        $result = '';
        if($r = $this->mv->get_vehicles(array(
                'add_type' => $this->input->get('add_type'),
                'status_type' => $this->input->get('status_type'),
                'view_type' => $this->input->get('view_type'),
                'agent_type' => $this->input->get('agent_type'),
                'start_type' => $this->input->get('start_type'),
                'end_type' => $this->input->get('end_type'),
                'search_keyword' => $this->input->get('search_keyword')
        ))){
            
            foreach($r as $i){
                $result.= '<div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 ">
                <div class="card">
                  <div class="card-body">
                    <div class="text-justified align-items-center">
                      <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 ">
                          <img src="'.UPLOADS_HTTP_URL.'images/vehicles/medium/'.$i['image'].'" class="float-sm-left wd-100p wd-sm-200 br-5" alt="img">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 ">
                          <h6 class="mg-b-0">'.$i['make_name'].' ' . $i['model_name'] . ' ' .$i['year'].'</h6>
                          <div class="listgroup-example">
                            <ul class="list-group">
                              <li><span class="tx-11 lh-2">'.implode(" | ", set_array_limit(json_decode($i['options']), 10)) . '</span></li>
                              <li><span class="tx-danger tx-12">AED '.$i['price'].'</span></li>
                              <li class="mg-t-0 tx-10">
                                <div class="d-flex">
                                  <div class="flex-fill">
                                    Year: '.$i['year'].'
                                  </div>
                                  <div class="flex-fill">
                                  '.$i['mileage'].' KM
                                  </div>
                                  <div class="flex-fill">
                                  '.$i['car_view_counter'].' views
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                          </p>
                        </div>
                      </div>
                      <!-- buttonn row -->
                      <div class="btn-list d-flex mg-t-10">
                        <a href="javascript:void(0);" class="btn btn-warning flex-fill" onclick = "edit_vehicle(' . $i['vehicle_id'] . ')">Edit</a>
                        <a href="javascript:void(0);" class="btn btn-info flex-fill" onclick = "set_featured(' . $i['vehicle_id'] . ');">' . (($i['featured'] == '1') ? 'Un-featured' : 'Featured').'</a>
                        <a href="javascript:void(0);" class="btn '. (($i['vehicle_status'] == 3) ? 'btn-primary': 'btn-light').' flex-fill" onclick = "change_vehicle_status(' . $i['vehicle_id'] . ');">' . (($i['vehicle_status'] == '3') ? 'Active' : 'Pause') . '</a>
                        ' . (($i['vehicle_status'] != 4) ? '<a href="javascript:void(0);" class="btn btn-danger flex-fill" onclick = "change_vehicle_to_sell('.$i['vehicle_id'].')">Sell</a>' : '').'
                      </div>
                    </div>
                  </div>
                </div>
              </div>';
            }

            echo json_encode(array(
                'success' => 1,
                'error' => '',
                'data' => $result
            ));
        }

    }


    //////////////////////


    function get_model()
    {
        $models = get_models($this->input->get('id'));

        $data = [];
        foreach ($models as $model) {
            $data[] = array(
                'id' => $model['id'],
                'title' => $model['title']
            );
        }
        echo json_encode($data);
        die;
    }


    function get_trim()
    {
        $models = get_trims($this->input->get('make'), $this->input->get('model'));

        $data = [];
        foreach ($models as $model) {
            $data[] = array(
                'id' => $model['id'],
                'title' => $model['title']
            );
        }
        echo json_encode($data);
        die;
    }

    function make_data(){


        $data = [];
        $counter = 1;
        foreach($this->mu->get_makes() as $item){
            $data[] = array(
                'id' => $counter,
                'title' => $item['title'],
                'model' => '<a href = "' . site_url('utilities/model/' . $item['id']) . '">' . $item['total_model'] . '</a>',
                'image' => "<img src = '" . IMAGE_HTTP_URL . 'make_logo/'.$item['logo'] ."' class = 'float-sm-left wd-20p wd-sm-50' />",
                'status' => '<div class="btn-icon-list btn-list">
                    ' . (($item['status'] == 1) ? '<button type="button" class="btn btn-icon btn-danger me-1"><i class="far fa-arrow-alt-circle-down"></i></button>' : '<button type="button" class="btn btn-icon btn-success me-1"><i class="far fa-arrow-alt-circle-up"></i></button>').'
                    <button type="button" class="btn btn-icon  btn-primary me-1"><i class="fe fe-edit"></i></button>
                    </div>'
            );
            $counter++;
        }

        echo json_encode(array(
            'data' => $data
            ));
    }

    function gallery()
    {

        if (is_uploaded_file($_FILES['gallery']['tmp_name'])) {
            $id = $this->input->post('auction_id');

            $target_dir = WEB_URL . "/auction/images/";
            $target_file = $target_dir . basename($_FILES["gallery"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $nFileName = $id . '_image.' . time() . '.' . $imageFileType;

            $check = getimagesize($_FILES["gallery"]["tmp_name"]);

            if ($check !== false) {
                $uploadOk = 1;

                if (move_uploaded_file($_FILES["gallery"]["tmp_name"], $target_dir . $nFileName)) {
                    $recentId = $this->auctions_m->upload_gallery_image($nFileName, $id);

                    echo json_encode(array(
                        'success' => 1,
                        'data' => array(
                            'id' => $recentId,
                            'file_path' => $nFileName
                        )
                    ));
                } else {


                    echo json_encode(array(
                        'success' => 0,
                        'data' => array(
                            'id' => 0,
                            'file_path' => ''
                        )
                    ));
                    //set_messsage("Sorry, there was an error uploading your thumb file.");
                }
            } else {

                echo json_encode(array(
                    'success' => 0,
                    'data' => array(
                        'id' => 0,
                        'file_path' => ''
                    )
                ));


                //set_messsage("Thumb is not an image.");
                $uploadOk = 0;
            }
        }
    }




    
}
