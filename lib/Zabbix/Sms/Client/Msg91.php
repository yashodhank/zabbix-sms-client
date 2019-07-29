<?php
/**
 * Zabbix Sms Msg91 client
 *
 * @author 	Yashodhan <ysk@securiace.com> Jul 29, 2019
 * @package 	Zabbix
 * @subpackage 	Sms
 */
namespace Zabbix\Sms\Client;

use Zabbix\Sms AS ZS;

class Msg91 extends ZS\Client
{
    /**
     * API Url
     *
     * @var string
     */
    protected static $_baseUrl = 'https://api.msg91.com/api/v2/sendsms?country=91';

    /**
     * Set message var and call parent::send
     *
     * @see \Zabbix\Sms\Client::send()
     */
    public function send($recipient, $text)
    {
        $this->_params['to'] = $recipient;
        $this->_params['message'] = $text;

        parent::send($recipient, $text);
    }
}
