<?php
use PHPUnit\Framework\TestCase;

class RequestResourcesTest extends TestCase
{
    public function testFormDataProcessing()
    {
        // Simulate form POST data
        $_POST = [
            'name' => 'John Doe',
            'contact_info' => 'john.doe@example.com',
            'primary_goal' => 'Improve academic performance',
            'current_resources' => 'University provided resources',
            'communication_method' => 'Email',
            'availability' => 'Weekdays (afternoon)',
            'specific_issues' => ['Financial aid and scholarships'],
            'urgency' => 'Within the next few days',
            'additional_info' => 'No additional information'
        ];

        // Here you test that the data was processed as expected
        $this->assertEquals('John Doe', $_POST['name']);
        $this->assertEquals('john.doe@example.com', $_POST['contact_info']);
        $this->assertEquals('Improve academic performance', $_POST['primary_goal']);
        $this->assertEquals('University provided resources', $_POST['current_resources']);
        $this->assertEquals('Email', $_POST['communication_method']);
        $this->assertEquals('Weekdays (afternoon)', $_POST['availability']);
        $this->assertEquals(['Financial aid and scholarships'], $_POST['specific_issues']);
        $this->assertEquals('Within the next few days', $_POST['urgency']);
        $this->assertEquals('No additional information', $_POST['additional_info']);
    }
}
?>
