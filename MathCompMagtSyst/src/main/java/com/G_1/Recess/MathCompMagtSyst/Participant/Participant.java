package com.G_1.Recess.MathCompMagtSyst.Participant;

import com.G_1.Recess.MathCompMagtSyst.Commons.ParticipantBaseEntity;
import com.G_1.Recess.MathCompMagtSyst.School.School;
import jakarta.persistence.*;
import lombok.Data;
import lombok.EqualsAndHashCode;

@Entity
@Data
@EqualsAndHashCode(callSuper = true)
@Table(name = "participants")
public class Participant extends ParticipantBaseEntity {
@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
private Long part_id;
private Long school_regNum;

}
