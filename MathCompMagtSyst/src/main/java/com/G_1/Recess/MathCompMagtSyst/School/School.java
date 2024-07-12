package com.G_1.Recess.MathCompMagtSyst.School;

import com.G_1.Recess.MathCompMagtSyst.Participant.Participant;
import com.G_1.Recess.MathCompMagtSyst.SchoolRepresentative.SchRepresentative;
import jakarta.persistence.*;
import lombok.Data;

import java.util.List;

@Entity
@Data
@Table(name = "schools")
public class School {

@Id
private Long regNum;

private String name;
private String district;
}

