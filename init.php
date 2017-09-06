<?php
/**
 * Created by PhpStorm.
 * User: colinleung
 * Date: 4/9/2017
 * Time: 5:58 PM
 */

// Get the cookies and apply
//HTTP_Header -> send_headers :: EVENT_SEND_HEADER
/*if ($cookies = $response->cookie())
{
  $processed_headers['Set-Cookie'] = $cookies;
}*/

//Kohana_Request -> render() :: EVENT_RENDER
// Prepare cookies
/*
if ($this->_cookies)
{
  $cookie_string = array();

  // Parse each
  foreach ($this->_cookies as $key => $value)
  {
    $cookie_string[] = $key.'='.$value;
  }

  // Create the cookie string
  $this->_header['cookie'] = implode('; ', $cookie_string);
}*/


//Kohana_HTTP_Header -> _send_headers_to_php :: EVENT_SEND_HEADER

/*
 * 		foreach ($headers as $key => $line)
		{
			if ($key == 'Set-Cookie' AND is_array($line))
			{
				// Send cookies
				foreach ($line as $name => $value)
				{
					Cookie::set($name, $value['value'], $value['expiration']);
				}

				continue;
			}

			header($line, $replace);
		}
 */

/*
 * Kohana_Request -> factory
 * 			$cookies = array();

			if (($cookie_keys = array_keys($_COOKIE)))
			{
				foreach ($cookie_keys as $key)
				{
					$cookies[$key] = Cookie::get($key);
				}
			}


			if (isset($cookies))
			{
				$request->cookie($cookies);
			}

	/**
	 * @var array    cookies to send with the request
	 */
//protected $_cookies = array();

/**
 * Set and get cookies values for this request.
 *
 * @param   mixed    $key    Cookie name, or array of cookie values
 * @param   string   $value  Value to set to cookie
 * @return  string
 * @return  mixed

public function cookie($key = NULL, $value = NULL)
{
  if (is_array($key))
  {
    // Act as a setter, replace all cookies
    $this->_cookies = $key;
    return $this;
  }
  elseif ($key === NULL)
  {
    // Act as a getter, all cookies
    return $this->_cookies;
  }
  elseif ($value === NULL)
  {
    // Act as a getting, single cookie
    return isset($this->_cookies[$key]) ? $this->_cookies[$key] : NULL;
  }

  // Act as a setter for a single cookie
  $this->_cookies[$key] = (string) $value;

  return $this;
}*/


/*
Kohana\Response
	 * @var  array       Cookies to be returned in the response

protected $_cookies = array();
 */

/**
 * Set and get cookies values for this response.
 *
 *     // Get the cookies set to the response
 *     $cookies = $response->cookie();
 *
 *     // Set a cookie to the response
 *     $response->cookie('session', array(
 *          'value' => $value,
 *          'expiration' => 12352234
 *     ));
 *
 * @param   mixed   $key    cookie name, or array of cookie values
 * @param   string  $value  value to set to cookie
 * @return  string
 * @return  void
 * @return  [Response]
 */
/*
public function cookie($key = NULL, $value = NULL)
{
  // Handle the get cookie calls
  if ($key === NULL)
    return $this->_cookies;
  elseif ( ! is_array($key) AND ! $value)
    return Arr::get($this->_cookies, $key);

  // Handle the set cookie calls
  if (is_array($key))
  {
    reset($key);
    while (list($_key, $_value) = each($key))
    {
      $this->cookie($_key, $_value);
    }
  }
  else
  {
    if ( ! is_array($value))
    {
      $value = array(
        'value' => $value,
        'expiration' => Cookie::$expiration
      );
    }
    elseif ( ! isset($value['expiration']))
    {
      $value['expiration'] = Cookie::$expiration;
    }

    $this->_cookies[$key] = $value;
  }

  return $this;
}*/

/**
 * Deletes a cookie set to the response
 *
 * @param   string  $name
 * @return  Response
 */
/*
public function delete_cookie($name)
{
  unset($this->_cookies[$name]);
  return $this;
}*/

/**
 * Deletes all cookies from this response
 *
 * @return  Response
 */
/*
public function delete_cookies()
{
  $this->_cookies = array();
  return $this;
}
*/

//Kohana_Response->render :: EVENT_RENDER
// Prepare cookies
/*
if ($this->_cookies)
{
  if (extension_loaded('http'))
  {
    $cookies = version_compare(phpversion('http'), '2.0.0', '>=') ?
      (string) new \http\Cookie($this->_cookies) :
      http_build_cookie($this->_cookies);
    $this->_header['set-cookie'] = $cookies;
  }
  else
  {
    $cookies = array();

    // Parse each
    foreach ($this->_cookies as $key => $value)
    {
      $string = $key.'='.$value['value'].'; expires='.date('l, d M Y H:i:s T', $value['expiration']);
      $cookies[] = $string;
    }

    // Create the cookie string
    $this->_header['set-cookie'] = $cookies;
  }
}*/