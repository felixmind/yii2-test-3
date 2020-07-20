<?php

/**
 * Тесты формы обратной связи.
 */
class FeedbackCest
{
    /**
     * Заполнение формы корректными данными и проверки успешности сохранения.
     *
     * @param AcceptanceTester $I
     */
    public function feedbackWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php?r=feedback');

        $I->fillField("//input[@id='feedback-customer']", 'Вячеслав Шепелев');
        $I->fillField("//input[@id='feedback-phone']", '+3(432)432-43-24');

        $I->click("//button[@type='submit']");

        $I->see('Вы ввели следующую информацию');
    }

    /**
     * Заполнение формы некорректными данными, и проверка получения ошибки.
     *
     * @param AcceptanceTester $I
     */
    public function feedbackNotWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php?r=feedback');

        $I->fillField("//input[@id='feedback-customer']", 'В');
        $I->fillField("//input[@id='feedback-phone']", '+3(432)432-43-');

        $I->click("//button[@type='submit']");

        $I->see('Customer should contain at least 2 characters.');
        $I->see('Phone is invalid.');
    }
}
