<?php


class CURL extends CI_Controller
{
    public function index(){


/*        // Load the HTTP library to make API requests
        $this->load->library('curl');

        // Make an API request
        $api_url = 'https://dummyjson.com/products';
        //$api_response = $this->curl->simple_get($api_url);
        $api_response = file_get_contents($api_url);
        // Convert the API response to an array or object
        $api_data = json_decode($api_response);

        // Pass the data to the view
        $data['products'] = $api_data;

        // Load the view to render the data
        $this->load->view('product_details', $data);
*/
        /////////////GET DATA FROM WEBSITE//////////

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://dummyjson.com/products");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $results = curl_exec($ch);
        
        $obj=json_decode(json_encode($results));
       
        $this->load->view('product_details', $obj);
        curl_close($ch);


        /*if (is_object($results))
        $obj = (array)$this->dismount($results);
        if (is_array($results)) {
        $new = array();
        foreach ($results as $key => $val) {
            $new[$key] = $this->object_to_array($val);
        }
    }
    else
        $new = $obj;
    print_r($new);*/




        /*$arr = json_decode(json_encode ( $results ) , true);
        print_r($results);*/

       // Checking if any error occurs
       // during request or not
        /*if($e = curl_error($ch)) {
            echo $e;
        } else {
     
        // Decoding JSON data
        $decodedData =
            json_decode($response, true);
         
        // Outputting JSON data in
        // Decoded form
            echo "<pre>";
            var_dump($decodedData);
        }
 
        // Closing curl
        curl_close($curl);*/
        /*$this->load->view('product_details', $response);
        curl_close($ch);*/




        /////////////DOWNLOAD IMAGE WITH HELP OF API//////////





        /*$url = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHuaPmX97DTfoCwdP_-ejeY8gNSIhr0IbGjw&usqp=CAU";
        $image = "img787878.jpg";
        $fimage = fopen($image,'w+');
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_FILE, $fimage);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5000);
        curl_exec($ch);
        curl_close($ch);
        fclose($fimage);*/


        /////////////GET API//////////




        /*$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://sarjucode.in/curl/index.php");
        $Arr = array(
            'ankit'=>'php develoapr',
            'ismail khan'=>'java develoapr',
            'narender'=>'frontend develoapar'
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $Arr);
        $result = curl_exec($ch);
        curl_close($ch);*/

        /*$ch = curl_init();
        $url = "https://reqres.in/api/users?page=2";
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);

        $decode = json_decode($result, true);

        print_r($decode);
        curl_close($ch);*/




        /////////////POST API//////////

        /*$ch = curl_init();
        $url = "https://reqres.in/api/users";

        $data_array = array(
            'name' => 'ankit',
            'job' => 'web developar'
        ); 
        $data = http_build_query($data_array);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);

        $decode = json_decode($result, true);

        print_r($decode);
        curl_close($ch);*/



        /////////////PUT API//////////

        /*$ch = curl_init();
        $url = "https://reqres.in/api/users/2";

        $data_array = array(
            'name' => 'ankit',
            'job' => 'web developar'
        ); 
        $data = http_build_query($data_array);

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $result = curl_exec($ch);

        $decode = json_decode($result, true);

        print_r($decode);
        curl_close($ch);*/




    }


}


/*{
/*"products":
[
    {
        "id":1,
        "title":"iPhone 9",
        "description":"An apple mobile which is nothing like apple",
        "price":549,
        "discountPercentage":12.96,
        "rating":4.69,"stock":94,
        "brand":"Apple","category":"smartphones",
        "thumbnail":"https://i.dummyjson.com/data/products/1/thumbnail.jpg",
        "images":["https://i.dummyjson.com/data/products/1/1.jpg",
        "https://i.dummyjson.com/data/products/1/2.jpg",
        "https://i.dummyjson.com/data/products/1/3.jpg",
        "https://i.dummyjson.com/data/products/1/4.jpg",
        "https://i.dummyjson.com/data/products/1/thumbnail.jpg"
    ]
}*/