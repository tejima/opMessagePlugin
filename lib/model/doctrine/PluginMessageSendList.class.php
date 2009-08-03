<?php

/**
 * PluginMessageSendList
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    opMessagePlugin
 * @subpackage form
 * @author     Shingo Yamada <s.yamada@tejimaya.com>
 */
abstract class PluginMessageSendList extends BaseMessageSendList
{
  /**
   * 返信済みかどうか取得する
   * @return int
   */
  public function getIsHensin()
  {
    $reply = Doctrine::getTable('SendMessageData')->getHensinMassage($this->getMemberId(), $this->getMessageId());
    if ($reply) {
      return 1;
    } else {
      return 0;
    }
  }
  
  /**
   * メッセージを既読状態にする
   * @return int
   */
  public function readMessage()
  { 
    $this->setIsRead(1);
    $this->save();
  }

  /**
   * get message send from
   *
   * @return Member
   */
  public function getSendFrom()
  {
    $objs = Doctrine::getTable('SendMessageData')->getSendMessageData($this->getId());
    if ($cnt = count($objs) == 0) {

      return null;
    }

    return $objs[0]->getMember();
  }

 /**
  * get message subject
  *
  * @return string
  */
  public function getSubject()
  {
    $objs = Doctrine::getTable('SendMessageData')->getSendMessageData($this->getId());
    if ($cnt = count($objs) == 0) {

      return null;
    }

    return $objs[0]->getSubject();
  }
}
