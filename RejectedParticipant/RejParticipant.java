package com.G_1.Recess.MathCompMagtSyst.RejectedParticipant;

import com.G_1.Recess.MathCompMagtSyst.Commons.ParticipantBaseEntity;
import jakarta.persistence.*;
import lombok.Data;
import lombok.EqualsAndHashCode;

import java.math.BigInteger;

@Entity
@Data
@EqualsAndHashCode(callSuper = true)
@Table(name = "rejectedparticipants")
public class RejParticipant extends ParticipantBaseEntity {
@Id
@GeneratedValue(strategy = GenerationType.IDENTITY)
private Long rejpart_id;
private Long school_regNum;

}
