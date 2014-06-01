<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Open Software License version 3.0
 *
 * This source file is subject to the Open Software License (OSL 3.0) that is
 * bundled with this package in the files license.txt / license.rst.  It is
 * also available through the world wide web at this URL:
 * http://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'The email validation method must be passed an array.';
$lang['email_invalid_address'] = 'Μη έγκυρη διεύθυνση email: %s';
$lang['email_attachment_missing'] = 'Αδύνατη η εύρεση του παρακάτω συνημμένου: %s';
$lang['email_attachment_unreadable'] = 'Αδύνατο το άνοιγμα του συνημμένου: %s';
$lang['email_no_recipients'] = 'Πρέπει να συμπεριλάβετε παραλήπτες: To, Cc, or Bcc';
$lang['email_send_failure_phpmail'] = 'Αδύνατη η αποστολή email με χρήση PHP mail(). Ο server μπορεί να μην είναι ρυθμξισμένος να στέλνει mail με αυτή τη μέθοδο.';
$lang['email_send_failure_sendmail'] = 'Αδύνατη η αποστολή email με χρήση PHP Sendmail. Ο server μπορεί να μην είναι ρυθμξισμένος να στέλνει mail με αυτή τη μέθοδο..';
$lang['email_send_failure_smtp'] = 'Αδύνατη η αποστολή email με χρήση PHP SMTP. Ο server μπορεί να μην είναι ρυθμξισμένος να στέλνει mail με αυτή τη μέθοδο.';
$lang['email_sent'] = 'Το μήνυμά σας στάλθηκε με επιτυχία με χ΄ρηση του παρακάτω προτόκολλου: %s';
$lang['email_no_socket'] = 'Αδύνατο το άνοιγμα socket προς Sendmail. Παρακαλώ ελέξτε τις ρυθμίσεις.';
$lang['email_no_hostname'] = 'Δεν ορίσατε SMTP hostname.';
$lang['email_smtp_error'] = 'Το παρακάτω SMTP σφάλμα παρουσιάστηκε: %s';
$lang['email_no_smtp_unpw'] = 'Σφάλμα: Πρέπει να ορίσετε SMTP χρήστη και κωδικό.';
$lang['email_failed_smtp_login'] = 'Αποτυχία αποστολής εντολής AUTH LOGIN. Σφάλμα: %s';
$lang['email_smtp_auth_un'] = 'Αποτυχία Failed to ταυτοποίησης ονόματος χρήστη. Σφάλμα: %s';
$lang['email_smtp_auth_pw'] = 'Αποτυχία Failed to ταυτοποίησηςκωδικού. Σφάλμα: %s';
$lang['email_smtp_data_failure'] = 'Αδυναμία αποστολής δεδομένων: %s';
$lang['email_exit_status'] = 'Exit status code: %s';

/* End of file email_lang.php */
/* Location: ./system/language/english/email_lang.php */