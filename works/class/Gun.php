<?php
class Gun
{

    // ↓フィールド============================
    // 銃の名前
    private $name;
    // 最大装弾数
    private $maxMagazine;
    // 残弾
    private $currentMagazine;
    // ↑フィールド============================

    // コンストラクタ
    function __construct($name, $maxMagazine)
    {
        // 問題1
        $this->name = $name;
        $this->maxMagazine = $maxMagazine;
        $this->currentMagazine = 0;
    }

    // 現在の状態を表示
    function echoStatus()
    {
        echo "======現在の状態======" . "\n";
        echo "武器名: " . $this->name . "\n";
        echo "最大装弾数: " . $this->maxMagazine . "\n";
        echo "残弾数: " . $this->currentMagazine . "\n";
        echo "======================" . "\n";
    }

    // リロード
    function relaod()
    {
        // 問題2
        if ($this->maxMagazine == $this->currentMagazine) {
            echo "リロードの必要はありません" . "\n";
            return;
        }
        $this->currentMagazine = $this->maxMagazine;
    }

    // 発砲
    function fire()
    {
        // 問題3
        if ($this->currentMagazine == 0) {
            echo "リロードしてください" . "\n";
            return;
        }
        $this->currentMagazine--;
        echo $this->name . "を発砲しました。残弾:" . $this->currentMagazine . "発" . "\n";
        if ($this->currentMagazine == 0) {
            echo "リロードしてください" . "\n";
        }
    }

    // 拡張マガジンを装着
    function setExtendedMagazine()
    {
        // 問題4
    }

    // 拡張マガジンを取外し
    function unsetExtendedMagazine()
    {
        // 問題4
    }
}
