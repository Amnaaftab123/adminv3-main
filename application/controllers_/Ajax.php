<?php

class Ajax extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('users_m');
        $this->load->model('vehicles_m', 'mv');
        $this->load->model('utilities_m', 'mu');
        $this->load->model('inquiries_m');
        $this->load->model('templates_m');
        $this->load->model('meta_m');

    }

    function t(){
        echo cleanFileName('a 3)df12_.jpg');
    }

    function configurations()
    {

        echo json_encode(array(
            'success' => 1,
            'error' => '',
            'data' => array(
                'url' => site_url()
            )
        ));
    }

    function validate()
    {

        $user = $this->users_m->login_call(array(
            'user_name' => $this->input->post('user_name'),
            'password' => $this->input->post('password'),
        ));

        if ($user) {


            $this->session->set_userdata("is_admin", true);

            $data = array(
                'email' => $user['email'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'id' => $user['id'],
                'login' => TRUE,
                'user_group_id' => $user['user_group_id']
            );
            $this->session->set_userdata("user_session", $data);

            echo json_encode(array(
                'success' => 1,
                'error' => '<b>login successful</b> Redirection in progress....',
                'redirect' => site_url('dashboard'),
                'data' => $user
            ));
        } else {

            echo json_encode(array(
                'success' => 0,
                'error' => '<b>Invalid credentials</b> Please check your credentials!',
                'redirect' => '',
                'data' => array()
            ));
        }
        die;
    }


    function get_vehicles()
    {


        $result = '';
        if ($r = $this->mv->get_vehicles(array(
            'add_type' => $this->input->get('add_type'),
            'status_type' => $this->input->get('status_type'),
            'view_type' => $this->input->get('view_type'),
            'agent_type' => $this->input->get('agent_type'),
            'start_type' => $this->input->get('start_type'),
            'end_type' => $this->input->get('end_type'),
            'search_keyword' => $this->input->get('search_keyword')
        ))) {
            

            foreach ($r as $i) {
                $result .= '<div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 ">
                <div class="card">
                  <div class="card-body">
                    <div class="text-justified align-items-center">
                      <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 ">
                          <img src="' . get_vehicle_image($i['vehicle_id'], $i['thumb_image']) . '" class="float-sm-left wd-100p wd-sm-200 br-5" alt="img">
                        </div>
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 ">
                          <h6 class="mg-b-0">' . $i['make_name'] . ' ' . $i['model_name'] . ' ' . $i['year'] . '</h6>
                          <div class="listgroup-example">
                            <ul class="list-group">
                              <li><span class="tx-11 lh-2">' . (($i['options'] != null) ? implode(" | ", set_array_limit(json_decode($i['options']), 10)) : '') . '</span></li>
                              <li><span class="tx-danger tx-12">AED ' . $i['price'] . '</span></li>
                              <li class="mg-t-0 tx-10">
                                <div class="d-flex">
                                  <div class="flex-fill">
                                    Year: ' . $i['year'] . '
                                  </div>
                                  <div class="flex-fill">
                                  ' . $i['mileage'] . ' KM
                                  </div>
                                  <div class="flex-fill">
                                  ' . $i['car_view_counter'] . ' views
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                          </p>
                        </div>
                      </div>
                      <!-- buttonn row -->
                      <div class="btn-list d-flex mg-t-10">' . (($i['sold'] == 0) ? '
                        <a href="javascript:void(0);" class="btn btn-warning flex-fill" onclick = "edit_vehicle(' . $i['vehicle_id'] . ')">Edit</a>
                        <a href="javascript:void(0);" class="btn btn-'.(($i['featured'] == '0') ? 'info' : 'success') .' flex-fill" id = "featured_home_'.$i['vehicle_id'].'" onclick = "set_featured(' . $i['vehicle_id'] . ');">' . (($i['featured'] == '0') ? 'Featured' : 'Unfeatured') . '</a>
                        <a href="javascript:void(0);" class="btn ' . (($i['vehicle_status'] == 1) ? 'btn-success' : 'btn-light') . ' flex-fill" id = "pause_home_'.$i['vehicle_id'].'" onclick = "change_vehicle_status(' . $i['vehicle_id'] . ');">' . (($i['vehicle_status'] == '1') ? 'Pause' : 'Activate') . '</a>
                        ' . (($i['vehicle_status'] != 4) ? '<a href="javascript:void(0);" class="btn btn-danger flex-fill" id = "sell_home_'.$i['vehicle_id'].'" onclick = "change_vehicle_to_sell('.$i['vehicle_id'].')">Sell</a>' : '') . '
                        ' : '<a href="javascript:void(0);" class="btn btn-light flex-fill" >Sold</a> <a href="javascript:void(0);" class="btn btn-warning flex-fill" onclick = "edit_vehicle(' . $i['vehicle_id'] . ')">View</a>') . '
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

    function get_make_edit()
    {

        $result = $this->utilities_m->get_make($this->input->get('id'));

        echo json_encode(array(
            'success' => 1,
            'error' => '',
            'data' => $result
        ));
    }


    function get_model_edit()
    {

        $result = $this->utilities_m->get_model($this->input->get('id'));

        echo json_encode(array(
            'success' => 1,
            'error' => '',
            'data' => $result
        ));
    }

    function get_trim_edit()
    {

        $result = $this->utilities_m->get_trim($this->input->get('id'));

        echo json_encode(array(
            'success' => 1,
            'error' => '',
            'data' => $result
        ));
    }


    function get_body_edit()
    {

        $result = $this->utilities_m->get_body_typ_by_id($this->input->get('id'));

        echo json_encode(array(
            'success' => 1,
            'error' => '',
            'data' => $result
        ));
    }



    function get_option_title_edit()
    {

        $result = $this->utilities_m->get_option_title($this->input->get('id'));

        echo json_encode(array(
            'success' => 1,
            'error' => '',
            'data' => $result
        ));
    }

    function get_option_edit()
    {

        $result = $this->utilities_m->get_option($this->input->get('id'));

        echo json_encode(array(
            'success' => 1,
            'error' => '',
            'data' => $result
        ));
    }

    //////////////////////


    function get_model()
    {
        $models = get_models($this->input->get('id'));

        $data = [];
        foreach ($models as $model) {
            $data[] = array(
                'id' => $model['id'],
                'title' => $model['title'],
                'make_id' => $model['make_id']
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

    function make_data()
    {

        $data = [];
        $counter = 1;
        foreach ($this->mu->get_makes() as $item) {
            $data[] = array(
                'id' => $counter,
                'title' => $item['title'],
                'model' => '<a href = "' . site_url('utilities/model/' . $item['id']) . '">' . $item['total_model'] . '</a>',
                'image' => "<img src = '" . IMAGE_HTTP_URL . 'make_logo/' . $item['logo'] . "' class = 'float-sm-left wd-20p wd-sm-50' />",
                'status' => '<div class="btn-icon-list btn-list">
                    ' . (($item['status'] == 1) ? '<button type="button" class="btn btn-icon btn-danger me-1" onclick = "change_make_status(' . $item['id'] . ',0);"><i class="far fa-arrow-alt-circle-down"></i></button>' : '<button type="button" class="btn btn-icon btn-success me-1"  onclick = "change_make_status(' . $item['id'] . ',1);"><i class="far fa-arrow-alt-circle-up"></i></button>') . '
                    <button type="button" class="btn btn-icon  btn-primary me-1" onclick = "load_make(' . $item['id'] . ')"><i class="fe fe-edit"></i></button>
                    </div>'
            );
            $counter++;
        }

        echo json_encode(array(
            'data' => $data
        ));
    }


    function make_dll()
    {

        if ($this->input->post('make_title')) {
            if ($this->utilities_m->make_exists($this->input->post('make_title'), $this->input->post('make_id'))) {

                echo json_encode(array(
                    'success' => 0,
                    'error' => 'Make already exists',
                    'data' => array()
                ));
                die;
            }
        }

        if ($this->input->post('make_id') == '0') {


            if (is_uploaded_file($_FILES["file_upload"]["tmp_name"])) {

                $pathParts = pathinfo($_FILES["file_upload"]["name"]);
                $fileName = generateSeoURL($this->input->post('make_title')) . '.' . $pathParts['extension'];
                $target_file =  dirname(__FILE__, 3) . '/uploads/images/make_logo/' . $fileName;

                if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {

                    $result = $this->utilities_m->add_make(
                        array(
                            'title' => $this->input->post('make_title'),
                            'logo' => $fileName
                        ),
                        $this->input->post('make_id')
                    );
                    echo json_encode(array(
                        'success' => 1,
                        'data' => array('id' => $result)
                    ));
                } else {

                    echo json_encode(array(
                        'success' => 0,
                        'data' => array()
                    ));
                }
            }
        } else {

            $isUploaded = false;

            if (is_uploaded_file($_FILES["file_upload"]["tmp_name"])) {

                $pathParts = pathinfo($_FILES["file_upload"]["name"]);
                $fileName = generateSeoURL($this->input->post('make_title')) . '.' . $pathParts['extension'];
                $target_file =  dirname(__FILE__, 3) . '/uploads/images/make_logo/' . $fileName;

                if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {

                    $isUploaded = true;
                } else {

                    echo json_encode(array(
                        'success' => 0,
                        'data' => array()
                    ));
                }
            }
            $result = $this->utilities_m->add_make(
                array(
                    'title' => $this->input->post('make_title'),
                    'logo' => $isUploaded ? $fileName : '0'
                ),
                $this->input->post('make_id')
            );
            echo json_encode(array(
                'success' => 1,
                'data' => array()
            ));
        }
    }

    function change_make_status()
    {
        $this->utilities_m->change_make_status($this->input->post('id'), $this->input->post('status'));

        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }



    //Model
    function model_data()
    {

        $data = [];
        $counter = 1;
        foreach ($this->mu->get_models() as $item) {
            $data[] = array(
                'id' => $counter,
                'title' => $item['title'],
                'make' => '<a href = "' . site_url('utilities/make/') . '">' . $item['make_title'] . '</a>',
                'trim' => $item['trim_total'],

                'status' => '<div class="btn-icon-list btn-list">
                    ' . (($item['status'] == 1) ? '<button type="button" class="btn btn-icon btn-danger me-1" onclick = "change_model_status(' . $item['id'] . ',0);"><i class="far fa-arrow-alt-circle-down"></i></button>' : '<button type="button" class="btn btn-icon btn-success me-1"  onclick = "change_model_status(' . $item['id'] . ',1);"><i class="far fa-arrow-alt-circle-up"></i></button>') . '
                    <button type="button" class="btn btn-icon  btn-primary me-1" onclick = "load_model(' . $item['id'] . ')"><i class="fe fe-edit"></i></button>
                    </div>'
            );
            $counter++;
        }

        echo json_encode(array(
            'data' => $data
        ));
    }


    function model_dll()
    {


        if ($this->input->post('title')) {
            if ($this->utilities_m->model_exists($this->input->post('title'), $this->input->post('make_id'),  $this->input->post('model_id'))) {

                echo json_encode(array(
                    'success' => 0,
                    'error' => 'Model already exists',
                    'data' => array()
                ));
                die;
            }
        }

        $result = $this->utilities_m->add_model(
            array(
                'title' => $this->input->post('title'),
                'make_id' => $this->input->post('make_id')
            ),
            $this->input->post('model_id')
        );

        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }

    function change_model_status()
    {
        $this->utilities_m->change_model_status($this->input->post('id'), $this->input->post('status'));

        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }


    //Trim
    function trim_data()
    {

        $data = [];
        $counter = 1;
        foreach ($this->mu->get_trims_with_details() as $item) {
            $data[] = array(
                'id' => $counter,
                'title' => $item['title'],
                'make_title' => '<a href = "' . site_url('utilities/make/') . '">' . $item['make_title'] . '</a>',
                'model_title' => '<a href = "' . site_url('utilities/model/') . '">' . $item['model_title'] . '</a>',
                'status' => '<div class="btn-icon-list btn-list">
                    ' . (($item['status'] == 1) ? '<button type="button" class="btn btn-icon btn-danger me-1" onclick = "change_trim_status(' . $item['id'] . ',0);"><i class="far fa-arrow-alt-circle-down"></i></button>' : '<button type="button" class="btn btn-icon btn-success me-1"  onclick = "change_trim_status(' . $item['id'] . ',1);"><i class="far fa-arrow-alt-circle-up"></i></button>') . '
                    <button type="button" class="btn btn-icon  btn-primary me-1" onclick = "load_trim(' . $item['id'] . ')"><i class="fe fe-edit"></i></button>
                    </div>'
            );
            $counter++;
        }

        echo json_encode(array(
            'data' => $data
        ));
    }


    function trim_dll()
    {


        if ($this->input->post('title')) {
            if ($this->utilities_m->model_exists($this->input->post('title'), $this->input->post('make_id'), $this->input->post('model_id'),  $this->input->post('trim_id'))) {

                echo json_encode(array(
                    'success' => 0,
                    'error' => 'Trim already exists',
                    'data' => array()
                ));
                die;
            }
        }

        $result = $this->utilities_m->add_trim(
            array(
                'title' => $this->input->post('title'),
                'make_id' => $this->input->post('make_id'),
                'model_id' => $this->input->post('model_id')
            ),
            $this->input->post('trim_id')
        );


        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }

    function change_trim_status()
    {
        $this->utilities_m->change_trim_status($this->input->post('id'), $this->input->post('status'));

        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }

    //Body type
    function body_data()
    {

        $data = [];
        $counter = 1;
        foreach ($this->mu->get_body_type() as $item) {
            $data[] = array(
                'id' => $counter,
                'title' => $item['title'],
                'status' => '<div class="btn-icon-list btn-list">
                    ' . (($item['status'] == 1) ? '<button type="button" class="btn btn-icon btn-danger me-1" onclick = "change_body_status(' . $item['id'] . ',0);"><i class="far fa-arrow-alt-circle-down"></i></button>' : '<button type="button" class="btn btn-icon btn-success me-1"  onclick = "change_body_status(' . $item['id'] . ',1);"><i class="far fa-arrow-alt-circle-up"></i></button>') . '
                    <button type="button" class="btn btn-icon  btn-primary me-1" onclick = "load_body(' . $item['id'] . ')"><i class="fe fe-edit"></i></button>
                    </div>'
            );
            $counter++;
        }

        echo json_encode(array(
            'data' => $data
        ));
    }


    function body_dll()
    {

        if ($this->input->post('title')) {
            if ($this->utilities_m->body_exists($this->input->post('title'), $this->input->post('body_id'))) {

                echo json_encode(array(
                    'success' => 0,
                    'error' => 'Body type already exists',
                    'data' => array()
                ));
                die;
            }
        }




        $result = $this->utilities_m->add_body_type(
            array(
                'title' => $this->input->post('title')
            ),
            $this->input->post('body_id')
        );

        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }

    function change_body_status()
    {
        $this->utilities_m->change_body_type_status($this->input->post('id'), $this->input->post('status'));

        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }


    //Option title
    function option_title_data()
    {

        $data = [];
        $counter = 1;
        foreach ($this->mu->get_option_titles() as $item) {
            $data[] = array(
                'id' => $counter,
                'title' => $item['title'],
                'status' => '<div class="btn-icon-list btn-list">
                    ' . (($item['status'] == 1) ? '<button type="button" class="btn btn-icon btn-danger me-1" onclick = "change_option_type_status(' . $item['id'] . ',0);"><i class="far fa-arrow-alt-circle-down"></i></button>' : '<button type="button" class="btn btn-icon btn-success me-1"  onclick = "change_option_type_status(' . $item['id'] . ',1);"><i class="far fa-arrow-alt-circle-up"></i></button>') . '
                    <button type="button" class="btn btn-icon  btn-primary me-1" onclick = "load_option_type(' . $item['id'] . ')"><i class="fe fe-edit"></i></button>
                    </div>'
            );
            $counter++;
        }

        echo json_encode(array(
            'data' => $data
        ));
    }


    function option_type_dll()
    {

        if ($this->input->post('title')) {
            if ($this->utilities_m->option_type_exists($this->input->post('title'), $this->input->post('option_type_id'))) {

                echo json_encode(array(
                    'success' => 0,
                    'error' => 'Option type title already exists',
                    'data' => array()
                ));
                die;
            }
        }



        $result = $this->utilities_m->add_option_type_title(
            array(
                'title' => $this->input->post('title')
            ),
            $this->input->post('option_type_id')
        );

        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }

    function change_option_type_status()
    {
        $this->utilities_m->change_option_title_type_status($this->input->post('id'), $this->input->post('status'));

        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }





    //Options 
    function options_data()
    {

        $data = [];
        $counter = 1;
        foreach ($this->mu->get_options() as $item) {
            $data[] = array(
                'id' => $counter,
                'title' => $item['title'],
                'option_title' => $item['option_title'],
                'status' => '<div class="btn-icon-list btn-list">
                    ' . (($item['status'] == 1) ? '<button type="button" class="btn btn-icon btn-danger me-1" onclick = "change_option_status(' . $item['id'] . ',0);"><i class="far fa-arrow-alt-circle-down"></i></button>' : '<button type="button" class="btn btn-icon btn-success me-1"  onclick = "change_option_status(' . $item['id'] . ',1);"><i class="far fa-arrow-alt-circle-up"></i></button>') . '
                    <button type="button" class="btn btn-icon  btn-primary me-1" onclick = "load_option(' . $item['id'] . ')"><i class="fe fe-edit"></i></button>
                    </div>'
            );
            $counter++;
        }

        echo json_encode(array(
            'data' => $data
        ));
    }


    function options_dll()
    {

        if ($this->input->post('title')) {
            if ($this->utilities_m->options_exists($this->input->post('title'), $this->input->post('title_id'), $this->input->post('option_id'))) {

                echo json_encode(array(
                    'success' => 0,
                    'error' => 'Option already exists',
                    'data' => array()
                ));
                die;
            }
        }

        $result = $this->utilities_m->add_option(
            array(
                'title' => $this->input->post('title'),
                'title_id' => $this->input->post('title_id')
            ),
            $this->input->post('option_id')
        );

        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }

    function change_options_status()
    {
        $this->utilities_m->change_option_status($this->input->post('id'), $this->input->post('status'));

        echo json_encode(array(
            'success' => 1,
            'data' => array()
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


    function load_buy_inquiries()
    {

        $data = [];
        $counter = 1;
        foreach ($this->inquiries_m->get_buy_inquiries() as $item) {
            $data[] = array(
                'title' => '<a href="javascript:void(0)" onclick = "load_buy_inqury_details(' . $item['id'] . ')"><div class = "d-flex "><div class = "pd-0 tx-14" >' . (($item['readed'] == 0) ? '<strong>' . ucwords($item['name']) . '</strong>' : ucwords($item['name'])) . '</div><div class = "mg-l-auto tx-10 tx-primary">' . getRangeDateString(strtotime($item['created_date'])) . '</div></div>' . maxLen($item['comments'], 30) . '</a>',
            );
            $counter++;
        }

        echo json_encode(array(
            'data' => $data
        ));
    }


    function load_buy_inquiry_details()
    {

        $result = $this->inquiries_m->get_buy($this->input->post('id'));

        if ($result) {

            $s = '<div class="media-body">
            <div class="media-title  font-weight-bold mt-3">'.ucwords($result['name']).' <span class="tx-13 font-weight-semibold">( ' . $result['email'] . ' )</span></div>
            <p class="mb-0"><i class = "fa fa-phone "></i> '.$result['phone'].'</p>
            <small class="me-2">' . date("M d, Y H:i A",strtotime($result['created_date'])) . '</small>
            <div class="eamil-body mt-3">
                <p>'.$result['comments'].'</p><hr />
                <table class = "table table-bordered ">
                    <thead>
                    <tr>
                        <th>Vehicle</th>
                        <th>Price (AED)</th>
                        <th>Milage (KM)
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>'.$result['make_title'].' ' . $result['model_title'] . ' '.$result['year'] . '</td>
                            <td>'.$result['price'] . '</td>
                            <td>'.$result['mileage'] . '</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>';

            echo json_encode(array(
                'success' => 0,
                'error' => '',
                'data' => $s
            ));
            die;
        } else {

            echo json_encode(array(
                'success' => 0,
                'error' => 'Please try again!',
                'data' => array()
            ));
            die;
        }
    }


    function load_sell_inquiries()
    {

        $data = [];
        $counter = 1;
        foreach ($this->inquiries_m->get_sell_inquiries() as $item) {
            $data[] = array(
                'title' => '<a href="javascript:void(0)" onclick = "load_sell_inqury_details(' . $item['id'] . ')"><div class = "d-flex "><div class = "pd-0 tx-14" >' . (($item['readed'] == 0) ? '<strong>' . ucwords($item['name']) . '</strong>' : ucwords($item['name'])) . '</div><div class = "mg-l-auto tx-10 tx-primary">' . getRangeDateString(strtotime($item['created_date'])) . '</div></div>' . maxLen($item['comments'], 30) . '</a>',
            );
            $counter++;
        }

        echo json_encode(array(
            'data' => $data
        ));
    }



    //Vehicle functions 
    function add_vehicle(){

        $s = '';
        if(count($this->input->post('features') > 0)){
            foreach($this->input->post('features') as $v){
                $s .= $v. ',';
            }
        }

        $i = array(
            'internal_code' => $this->input->post('internal_code'),
            'is_commercial' => $this->input->post('a_commercial'),
            'sale_agent_id' => $this->input->post('a_select_agent'),
            'make_id' => $this->input->post('a_select_make'),
            'model_id' => $this->input->post('a_select_model'),
            'trim_id' => $this->input->post('a_select_trim'),
            'year_id' => $this->input->post('a_select_year'),
            'mileage' => $this->input->post('a_kilometers'),
            'price' => $this->input->post('a_price'),
            'vat' => $this->input->post('a_vat'),
            'term_of_loan' => $this->input->post('a_loan_years'),
            'down_payment' => $this->input->post('a_downpayment'),
            'annual_interest' => $this->input->post('a_interest_rate'),
            'emi' => $this->input->post('e_emi'),
            'vin' => $this->input->post('a_vin'),
            'warranty' => $this->input->post('a_under_warrenty'),

            'warrenty_kilometers' => $this->input->post('a_warrenty_kilometers'),
            'warrenty_months' => $this->input->post('a_warrenty_months'),
            'warrenty_company' => $this->input->post('a_warrenty_company_name'),

            'service_history' => $this->input->post('a_service_history'),
            'service_center_name' => $this->input->post('a_service_center'),

            'service_contract' => $this->input->post('a_service_contract'),
            'service_contract_kilometers' => $this->input->post('a_service_contract_kilometers'),
            'service_contract_months' => $this->input->post('a_service_contract_months'),
            'service_contract_center' => $this->input->post('a_service_contract_center_name'),

            'body_id' => $this->input->post('a_select_body'),
            'fuel_id' => $this->input->post('a_select_fuel'),
            'transmission_id' => $this->input->post('a_select_transmission'),

            'specification_id' => $this->input->post('a_select_specification'),
            'vehicle_condition_id' => $this->input->post('a_car_condition'),
            'engine_size_id' => $this->input->post('a_select_size'),
            'horsepower_id' => $this->input->post('a_select_hourse'),
            'drive_type_id' => $this->input->post('a_drive_type'),
            
            'color_id' => $this->input->post('a_select_color'),
            'seat_id' => $this->input->post('a_select_seats'),
            'door_id' => $this->input->post('a_select_doors'),

            'meta_title' => $this->input->post('a_meta_title'),
            'meta_keyword' => $this->input->post('a_meta_keyword'),
            'meta_desciption' => $this->input->post('a_meta_description'),
            'options' => $s,
            'published_at' => (count(($this->input->post('sources')) > 0) ? implode(',',$this->input->post('sources')) : '')
        );

        $id = $this->mv->add_vehicle($i);
        $folder = './uploads/images/vehicles/' . $id;
        make_folder_structure($folder);
        
        if ($_FILES){
            $filesArr = $_FILES["files"];
            for ($x = 0; $x < count($filesArr); $x++) {
                if (isset($filesArr['tmp_name'][$x]))
                {
                    $f = cleanFileName($filesArr['name'][$x]);
                    $n = $folder . '/' . $f;
                    if (move_uploaded_file($filesArr['tmp_name'][$x], $n)) {

                        $g = array(
                            'vehicle_id' => $id,
                            'image_title' => $this->input->post('file_title')[$x],
                            'is_main' => $this->input->post('is_main')[$x],
                            'image_address' => $f
                        );                        
                        $this->db->insert('tbl_vehicle_images', $g);
                    }
                }
            }
        }
        
        echo json_encode(array(
            'success' => 1,
            'error' => '',
            'data' => true
        ));
        die;
    }


    //User functions 
    function get_users()
    {
        $users = $this->users_m->get_users();

        $data = [];
        foreach ($users as $user) {
            $data[] = array(
                'id' => $user['id'],
                'full_name' => $user['first_name'] . ' ' . $user['last_name'],
                'user_name' => $user['user_name'],
                'staff_code' => $user['staff_code'],
                'group_name' => $user['group_name'],
                'email' => $user['email'],
                'contact_number' => $user['contact_number'],
                'created_at' => $user['created_at'],
                'last_login' => $user['last_login'],
                'action' => $user['id'] != get_current_id() ? '<div class="btn-icon-list btn-list">
                ' . (($user['enabled'] == 1) ? '<button type="button" class="btn btn-icon btn-danger me-1" onclick = "change_user_status(' . $user['id'] . ',0);"><i class="far fa-arrow-alt-circle-down"></i></button>' : '<button type="button" class="btn btn-icon btn-success me-1"  onclick = "change_user_status(' . $user['id'] . ',1);"><i class="far fa-arrow-alt-circle-up"></i></button>') . '
                <button type="button" class="btn btn-icon  btn-primary me-1" onclick = "edit_user(' . $user['id'] . ')"><i class="fe fe-edit"></i></button>&nbsp;<button type="button" class="btn btn-icon  btn-danger me-1" onclick = "delete_user(' . $user['id'] . ')"><i class="fe fe-trash"></i></button>
                </div>':''
            );
        }
        echo json_encode(array(
            'data' => $data
        ));
        die;
    }

    function add_user(){

        $r = $this->users_m->add_user(array(
            'user_name' => $this->input->post('user_name'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'role' => $this->input->post('role'),
            'staff_code' => $this->input->post('staff_code'),
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'contact_number' => $this->input->post('contact_number'),
            'emirate_id' => $this->input->post('emirate_id'),
            'dob' => $this->input->post('dob'),
            'user_id' => $this->input->post('user_id')
        ));

        switch($r){
            case "exists":
                echo json_encode(array(
                    'success' => 0,
                    'error' => 'username',
                    'data' => false
                ));
                die;
            break;
            case "contact_exists":
                echo json_encode(array(
                    'success' => 0,
                    'error' => 'contact_number',
                    'data' => false
                ));
                die;
            break;
            default:
                echo json_encode(array(
                    'success' => 1,
                    'error' => '',
                    'data' => $r
                ));
                die;
            break;
        }


    }

    function change_user_status(){

        $this->db->query("UPDATE " . DB_PREFIX . "user SET enabled = " . $this->db->escape($this->input->post('status'))." WHERE id = " . $this->db->escape($this->input->post('id')));
        echo json_encode(array(
            'success' => 1,
            'error' => '',
            'data' => true
        ));

    }


    function get_roles()
    {
        $roles = $this->users_m->get_user_groups();

        $data = [];
        foreach ($roles as $role) {
            $data[] = array(
                'id' => $role['id'],
                'name' => $role['name'],
                'total_users' => $role['total_users'],
                'updated_at' => $role['updated_at'],
                'action' => '<div class="btn-icon-list btn-list">
                ' . (($role['enabled'] == 1) ? '<button type="button" class="btn btn-icon btn-danger me-1" onclick = "change_role_status(' . $role['id'] . ',0);"><i class="far fa-arrow-alt-circle-down"></i></button>' : '<button type="button" class="btn btn-icon btn-success me-1"  onclick = "change_role_status(' . $role['id'] . ',1);"><i class="far fa-arrow-alt-circle-up"></i></button>') . '
                <button type="button" class="btn btn-icon  btn-primary me-1" onclick = "edit_role(' . $role['id'] . ')"><i class="fe fe-edit"></i></button>&nbsp;<button type="button" class="btn btn-icon  btn-danger me-1" onclick = "delete_role(' . $role['id'] . ')"><i class="fe fe-trash"></i></button>
                </div>'
            );
        }
        echo json_encode(array(
            'data' => $data
        ));
        die;
    }


    function change_role_status(){
        
        $this->users_m->change_role_status($this->input->post('id'), $this->input->post('status'));
        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }




    function get_showrooms()
    {
        $roles = $this->mu->get_showrooms();

        $data = [];
        foreach ($roles as $role) {
            $data[] = array(
                'id' => $role['id'],
                'name' => $role['name'],
                'telephone' => $role['telephone'],
                'email' => $role['email'],
                'total_vehicles' => $role['total_vehicles'],
                'updated_at' => $role['updated_at'],
                'action' => '<div class="btn-icon-list btn-list">
                ' . (($role['enabled'] == 1) ? '<button type="button" class="btn btn-icon btn-danger me-1" onclick = "change_showroom_status(' . $role['id'] . ',0);"><i class="far fa-arrow-alt-circle-down"></i></button>' : '<button type="button" class="btn btn-icon btn-success me-1"  onclick = "change_showroom_status(' . $role['id'] . ',1);"><i class="far fa-arrow-alt-circle-up"></i></button>') . '
                <button type="button" class="btn btn-icon  btn-primary me-1" onclick = "edit_showroom(' . $role['id'] . ')"><i class="fe fe-edit"></i></button>&nbsp;<button type="button" class="btn btn-icon  btn-danger me-1" onclick = "delete_showroom(' . $role['id'] . ')"><i class="fe fe-trash"></i></button>
                </div>'
            );
        }
        echo json_encode(array(
            'data' => $data
        ));
        die;
    }


    function change_showroom_status(){
        
        $this->mu->change_showroom_status($this->input->post('id'), $this->input->post('status'));
        echo json_encode(array(
            'success' => 1,
            'data' => array()
        ));
    }

    function get_templates()
    {

        $data = [];
        $counter = 1;
        foreach ($this->templates_m->get_templates() as $item) {
            $data[] = array(
                'id' => $counter,
                'name' => $item['name'],
                'from_name' => $item['from_name'],
                'from_email' => $item['from_email'],
                'notification_type' => ucwords($item['notification_type']),
                'short_code' => '<strong>'.$item['short_code'].'</strong>',
                'last_updated' => $item['last_updated'],
                'action' => '<div class="btn-icon-list btn-list">
                    <button type="button" class="btn btn-icon  btn-primary me-1" onclick = "edit_template(' . $item['id'] . ')"><i class="fe fe-edit"></i></button>
                    </div>'
            );
            $counter++;
        }

        echo json_encode(array(
            'data' => $data
        ));
    }


    function get_meta()
    {

        $data = [];
        $counter = 1;
        foreach ($this->meta_m->get_meta_data() as $item) {
            $data[] = array(
                'id' => $counter,
                'name' => ucwords($item['name']),
                'short_code' => $item['short_code'],
                'meta_title' => $item['meta_title'],
                'last_updated' => $item['last_updated'],
                'action' => '<div class="btn-icon-list btn-list">
                    <button type="button" class="btn btn-icon  btn-primary me-1" onclick = "edit_meta(' . $item['id'] . ')"><i class="fe fe-edit"></i></button>
                    </div>'
            );
            $counter++;
        }

        echo json_encode(array(
            'data' => $data
        ));
    }

    function change_featured(){
        $r = $this->mv->change_featured($this->input->post('id'));
            
        echo json_encode(array(
                'success' => 1,
                'data' => array(
                    'current' => $r
                )
            ));

    }


    function change_status(){
        $r = $this->mv->change_status($this->input->post('id'));
            
        echo json_encode(array(
                'success' => 1,
                'data' => array(
                    'current' => $r
                )
            ));

    }

    function change_to_sold(){
        $r = $this->mv->change_to_sold($this->input->post('id'));
            
        echo json_encode(array(
                'success' => 1,
                'data' => array()
            ));

    }

    







}
