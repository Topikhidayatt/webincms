<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class WebAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Authentication Check
        $session = session();

        if ($session->login == false)
        {
            return redirect('admin/login');
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}