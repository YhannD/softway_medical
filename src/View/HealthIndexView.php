<?php

declare(strict_types=1);

namespace App\View;

class HealthIndexView extends BaseView {
    // Render the diagnosis using Twig
    public function renderDiagnosis(array $diagnosis): void {
        // Use Twig to render the diagnosis template
        echo $this->render('diagnosis.html.twig', ['diagnosis' => $diagnosis]);
    }
}
