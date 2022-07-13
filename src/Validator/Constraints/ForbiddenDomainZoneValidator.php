<?php

namespace App\Validator\Constraints;

use http\Exception\UnexpectedValueException;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ForbiddenDomainZoneValidator extends ConstraintValidator
{
    const DOMAIN_ZONE_RU = '.ru';

    public function validate($value, Constraint $constraint): void
    {
        if (null === $value || "" === $value){
            return;
        }
        if (!is_string($value)){
            throw new UnexpectedValueException($value, "string");
        }
        if (!strpos($value, self::DOMAIN_ZONE_RU) === false){
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation()
                ;
        }
    }
}