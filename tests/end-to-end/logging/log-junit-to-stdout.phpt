--TEST--
phpunit --log-junit php://stdout _files/StatusTest.php
--FILE--
<?php declare(strict_types=1);
$_SERVER['argv'][] = '--do-not-cache-result';
$_SERVER['argv'][] = '--no-configuration';
$_SERVER['argv'][] = '--no-output';
$_SERVER['argv'][] = '--log-junit';
$_SERVER['argv'][] = 'php://stdout';
$_SERVER['argv'][] = __DIR__ . '/../_files/basic/unit/StatusTest.php';

require_once __DIR__ . '/../../bootstrap.php';

(new PHPUnit\TextUI\Application)->run($_SERVER['argv']);
--EXPECTF--
<?xml version="1.0" encoding="UTF-8"?>
<testsuites>
  <testsuite name="PHPUnit\SelfTest\Basic\StatusTest" file="%sStatusTest.php" tests="12" assertions="4" errors="2" failures="2" skipped="4" time="%f">
    <testcase name="testSuccess" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="1" time="%f"/>
    <testcase name="testFailure" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="1" time="%f">
      <failure type="PHPUnit\Framework\ExpectationFailedException">PHPUnit\SelfTest\Basic\StatusTest::testFailure%A
Failed asserting that false is true.
%A
%sStatusTest.php:%d</failure>
    </testcase>
    <testcase name="testError" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <error type="RuntimeException">PHPUnit\SelfTest\Basic\StatusTest::testError%A
RuntimeException:%w
%A
%sStatusTest.php:%d</error>
    </testcase>
    <testcase name="testIncomplete" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <skipped/>
    </testcase>
    <testcase name="testSkipped" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <skipped/>
    </testcase>
    <testcase name="testRisky" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f"/>
    <testcase name="testSuccessWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="1" time="%f"/>
    <testcase name="testFailureWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="1" time="%f">
      <failure type="PHPUnit\Framework\ExpectationFailedException">PHPUnit\SelfTest\Basic\StatusTest::testFailureWithMessage%A
failure with custom message
Failed asserting that false is true.
%A
%sStatusTest.php:%d</failure>
    </testcase>
    <testcase name="testErrorWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <error type="RuntimeException">PHPUnit\SelfTest\Basic\StatusTest::testErrorWithMessage%A
RuntimeException: error with custom message
%A
%sStatusTest.php:%d</error>
    </testcase>
    <testcase name="testIncompleteWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <skipped/>
    </testcase>
    <testcase name="testSkippedWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f">
      <skipped/>
    </testcase>
    <testcase name="testRiskyWithMessage" file="%sStatusTest.php" line="%d" class="PHPUnit\SelfTest\Basic\StatusTest" classname="PHPUnit.SelfTest.Basic.StatusTest" assertions="0" time="%f"/>
  </testsuite>
</testsuites>