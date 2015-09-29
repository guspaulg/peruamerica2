<?php

class TarjetasController extends BaseController {

	public function __construct()
    {
        $this->beforeFilter('auth', array('except' => 'mostrar'));            
        $this->beforeFilter(function(){            
            Auth::check() ? $this->layout = 'layout.plantillausuario' : $this->layout = 'layout.plantilla'; 
        });
    }

	public function mostrar()
    {   

        if(Auth::check())
        {       

            if (Request::isMethod('get'))
            {            
                $vista=1;
                $email = Auth::user()->email;
                $usuario = DB::table('datosusuarios')->where('email', $email)->first();
                $this->layout->usuario = $usuario;   
        		$this->layout->content = View::make('home.tarjetas', array('vista' => $vista));
            }        
            else if (Request::isMethod('post'))
            {
        	  	$vista=2;
                $producto='tarjetas Personales';
        	  	$cantidad=Input::get('cantidad');
                $cantidad= $cantidad.' millares';
        	  	$papel=Input::get('papel');
        	  	$cantos=Input::get('cantos');
        	  	$diseno=Input::get('diseno');

        	  	$costo=40;

        	  	if($papel==1){ $papel2 = 'Cartulina';}
        	  	if($papel==2){ $papel2= 'Papel Couche';}
        	  	if($papel==3){ $papel2= 'Papel Couche Brillante';}

        	  	if($cantos==1){ $cantos2 = 'Bordes Redondeados';}
        	  	if($cantos==2){ $cantos2= 'Bordes en punta';}

        	  	if($diseno==1){ $diseno2 = 'Haganme un diseño';}
        	  	if($diseno==2){ $diseno2= 'Tengo un diseño';}

                $email = Auth::user()->email;
                $usuario = DB::table('datosusuarios')->where('email', $email)->first();
                $this->layout->usuario=$usuario;  

    	    	$this->layout->content = View::make('home.tarjetas', array('producto'=>$producto,'vista' => $vista,
    	    	'cantidad'=>$cantidad, 'papel'=>$papel2, 'cantos'=>$cantos2, 'diseno' => $diseno2, 'costo'=>$costo));
    	    }
        }
        else
        {
            if (Request::isMethod('get'))
            {            
                $vista=1; 
                $this->layout->content = View::make('home.tarjetas', array('vista' => $vista));
            }        
            else if (Request::isMethod('post'))
            {
                $vista=2;
                $producto='tarjetas Personales';
                $cantidad=Input::get('cantidad');
                $cantidad= $cantidad.' millares';
                $papel=Input::get('papel');
                $cantos=Input::get('cantos');
                $diseno=Input::get('diseno');

                $costo=30;

                if($papel==1){ $papel2 = 'Cartulina';}
                if($papel==2){ $papel2= 'Papel Couche';}
                if($papel==3){ $papel2= 'Papel Couche Brillante';}

                if($cantos==1){ $cantos2 = 'Bordes Redondeados';}
                if($cantos==2){ $cantos2= 'Bordes en punta';}

                if($diseno==1){ $diseno2 = 'Haganme un diseño';}
                if($diseno==2){ $diseno2= 'Tengo un diseño';}

                $this->layout->content = View::make('home.tarjetas', array('producto'=>$producto,'vista' => $vista,
                'cantidad'=>$cantidad, 'papel'=>$papel2, 'cantos'=>$cantos2, 'diseno' => $diseno2, 'costo'=>$costo));
           
            }

        } 
    }

}