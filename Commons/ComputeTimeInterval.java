package com.G_1.Recess.MathCompMagtSyst.Commons;

import org.springframework.stereotype.Component;

import java.time.Duration;
import java.time.LocalDateTime;
import java.time.ZoneId;
@Component
public class ComputeTimeInterval {

ZoneId eastAfricanTimeZone = ZoneId.of("Africa/Nairobi");

LocalDateTime now = LocalDateTime.now(eastAfricanTimeZone);

public  long calculateDurationInMinutes(LocalDateTime dateTime1, LocalDateTime dateTime2) {
Duration duration = Duration.between(dateTime1, dateTime2);
return Math.abs(duration.toMinutes());
}

public  long calculateDurationInDays(LocalDateTime dateTime1, LocalDateTime dateTime2) {
Duration duration = Duration.between(dateTime1, dateTime2);
return Math.abs(duration.toDays());
}
}

