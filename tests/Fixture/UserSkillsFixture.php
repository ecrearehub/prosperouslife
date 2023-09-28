<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UserSkillsFixture
 */
class UserSkillsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'hours' => 1,
                'months' => 1,
                'skill_blogging' => 1,
                'skill_communication' => 1,
                'skill_marketing' => 1,
                'skill_systems' => 1,
                'skill_web_development' => 1,
                'skill_programming' => 1,
                'skill_engineering' => 1,
                'skill_accounting' => 1,
                'skill_sales' => 1,
                'skill_leadership' => 1,
                'skill_teamwork' => 1,
                'skill_coordination' => 1,
                'skill_planning' => 1,
                'skill_project_management' => 1,
                'skill_negotiation' => 1,
                'skill_networking' => 1,
                'skill_entrepreneurship' => 1,
                'skill_creativity' => 1,
                'skill_designing' => 1,
                'skill_photography' => 1,
                'skill_film' => 1,
                'skill_music' => 1,
                'skill_crafting' => 1,
                'skill_teaching' => 1,
                'skill_working_with_children' => 1,
                'skill_natural_sciences' => 1,
                'skill_medical' => 1,
                'skill_martial_arts' => 1,
                'skill_yoga_pilates' => 1,
                'skill_others' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => 'Lorem ipsum dolor sit amet',
                'updated' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
