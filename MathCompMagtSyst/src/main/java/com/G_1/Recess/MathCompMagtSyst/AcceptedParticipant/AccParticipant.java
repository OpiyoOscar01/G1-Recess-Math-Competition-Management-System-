package com.G_1.Recess.MathCompMagtSyst.AcceptedParticipant;

import com.G_1.Recess.MathCompMagtSyst.Commons.ParticipantBaseEntity;
import jakarta.persistence.*;
import lombok.Data;
import lombok.EqualsAndHashCode;

@Entity
@Data
@EqualsAndHashCode(callSuper = true)
@Table(name = "acceptedparticipants")
public class AccParticipant extends ParticipantBaseEntity {
@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
private Long accpart_id;
private Long school_regNum;

}
