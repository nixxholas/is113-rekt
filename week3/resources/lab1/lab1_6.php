<?php
    $prev_balance = $_GET['prev_balance'];
    $paid_amount = $_GET['paid_amount'];
    $day_payment_made = $_GET['day_payment_made'];
    $interest_rate = $_GET['interest_rate'] / 100;

    # Write code here
    $days_in_cur_month = cal_days_in_month(CAL_GREGORIAN, (int) date('m'), (int) date('y'));
    $days_left = $days_in_cur_month - $day_payment_made;

    $payment_overhead = $paid_amount * $days_left;
    $avg_daily_bal = (($prev_balance * $days_in_cur_month) - $payment_overhead) / $days_in_cur_month;

    $int_charge = $avg_daily_bal * $interest_rate;

    $new_bal = $prev_balance - $paid_amount;

    echo "Previous balance is $" . $prev_balance;
    echo "<br/>";
    echo "Payment of $" . $paid_amount . " was made on day " . $days_left . " of the billing cycle";
    echo "<br/>";
    echo "Interest on outstanding amount is $" . $int_charge;
    echo "<br/>";

    # End of code

?>